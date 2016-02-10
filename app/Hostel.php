<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'slug', 'type', 'sex', 'address', 'description'
    ];

    public function rooms(){
        return $this->hasMany('HMS\Room');
    }

    public function reviews(){
        return $this->hasMany('HMS\Review');
    }
}
