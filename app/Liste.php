<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liste extends Model
{
    public function user()
    {
        return $this->belongsTo(‘App\Utilisateur);
    }
}
