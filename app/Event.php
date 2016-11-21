<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'date',
        'max_participants', 'max_booking_date'
    ];

    /**
     * The attributes that are not mass assignable
     *
     * @var array
     */
    protected $guarded = [
        'owner', 'created_at', 'updated_at'
    ];

    /**
     * The attributes that are date format
     * @var array
     */
    protected $dates = [
        'date', 'created_at', 'updated_at'
    ];


    /**
     * User(owner) relationship
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function owner() {
        return $this->belongsTo('App\User', 'owner');
    }

    /**
     * User(participants) relationship
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function participants() {
        return $this->belongsToMany('App\User');
    }
}
