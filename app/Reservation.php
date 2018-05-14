<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public function getUserID(){

        return User::where('id', $this->user_id)->first()->username;
        return User::where('name', $this->username)->first()->user_id;
    }
}
