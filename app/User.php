<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'salt', 'confirmation_token', 'password_requested_at'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * Set the user's password.
     *
     * @param string $value
     * @return void
     */
    public function setPasswordAttribute($value)
    {
        if (empty($this->salt)) {
            $salted = $value;
        } else {
            $salted = $value.'{'.$this->salt.'}';
        }

        $digest = hash('sha512', $salted, true);
        for ($i = 1; $i < 5000; ++$i) {
            $digest = hash('sha512', $digest.$salted, true);
        }

        $this->attributes['password'] = base64_encode($digest);
    }

    /**
     * Get the user's full name.
     *
     * @return string
     */
    public function getFullNameAttribute()
    {
        if ($this->nom && $this->prenom) {
            return "{$this->prenom} {$this->nom}";
        } else if ($this->username) {
            return $this->username;
        }

        return $this->email;
    }

    /**
     * Check if the user's have the specified role.
     *
     * @param string $type
     * @return boolean
     */
    public function typeOf(string $type): bool
    {
        $roles = unserialize($this->roles);
        foreach ($roles as $role) {
            if ($role === strtoupper($type)) {
                return true;
            }
        }

        return false;
    }

    /**
     * This function is used to return all events in which the user participates.
     *
     * @return void
     */
    public function events()
    {
        $events = Evenement::all();
        foreach ($events as $event)
        {
            if ($event->participants()->some('id', '=', user()->id)) {
                $myEvents[] = $event;
            }
        }

        return $myEvents;
    }

    /**
     * This function is used to return all outfits attribued to user.
     *
     * @return void
     */
    public function outfits()
    {
        return collect(DB::table('attribution_tenue')->where('user_id', $this->id)->get()->map(function ($outfit) {
            return $outfit;
        }));
    }
}