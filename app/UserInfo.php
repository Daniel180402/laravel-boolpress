<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserInfo extends Model
{
    //tabella dipendente
    public function user() {
        return $this->belongsTo('App\User');
    }
}
