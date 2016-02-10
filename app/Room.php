<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $fillable = [
        'room_type', 'hostel_id', 'block', 'price'
    ];

    public function hostels(){
        return $this->belongsTo('HMS\Hostel');
    }
}
