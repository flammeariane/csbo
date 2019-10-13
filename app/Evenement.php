<?php

namespace App;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use MaddHatter\LaravelFullcalendar\Event;

class Evenement extends Model implements Event
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'evenement';

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = true;

    /**
     * The name of the "created at" column.
     *
     * @var string
     */
    const CREATED_AT = 'dateCreation';

    /**
     * The name of the "updated at" column.
     *
     * @var string
     */
    const UPDATED_AT = 'dateUpdate';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'dateDebut' => 'datetime',
        'dateFin' => 'datetime'
    ];

    /**
     * Get the event's title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->titre;
    }

    /**
     * Is it an all day event?
     *
     * @return bool
     */
    public function isAllDay()
    {
        if ($this->dateDebut->diffInHours($this->dateFin) >= 8) return true;

        return false;
    }

    /**
     * Get the start time
     *
     * @return DateTime
     */
    public function getStart()
    {
        return $this->dateDebut;
    }

    /**
     * Get the end time
     *
     * @return DateTime
     */
    public function getEnd()
    {
        return $this->dateFin;
    }

    /**
     * Optional settings for this event
     *
     * @return array
     */
    public function getEventOptions()
    {
        return [
            'id' => $this->id,
            'groupId' => $this->category()->id,
            'color' => $this->category()->couleur,
            'textColor' => 'white',
            'url' => route('events.show', $this->id)
        ];
    }

    /**
     * Return the category associated with the evenement.
     *
     * @return void
     */
    public function category()
    {
        return DB::table('categorie_evenement')->where('id', $this->categorie_id)->first();
    }

    /**
     * Return all users associated with the evenement.
     * 
     * @return void
     */
    public function participants()
    {        
        return collect(DB::table('participation_evenement')->where('evenement_id', $this->id)->get()->map(function ($participant) {
            return User::where('id', $participant->user_id)->first();
        }));
    }
}
