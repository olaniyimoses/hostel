<?php

namespace HMS;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public function hostels(){
        return $this->belongsTo('HMS\Hostel');
    }
}
