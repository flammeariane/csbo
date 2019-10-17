<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Outfit extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'attribution_tenue';

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
        'dateAttribution' => 'datetime'
    ];

    /**
     * Return the size associated with the outfit.
     *
     * @return void
     */
    public function size() {
        return DB::table('taille_tenue')->where('id', $this->taille_id)->first();
    }

    /**
     * Return the type associated with the outfit.
     *
     * @return void
     */
    public function type() {
        return DB::table('piece_tenue')->where('id', $this->piece_tenue_id)->first();
    }
}
