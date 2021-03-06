<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cyrildewit\PageVisitsCounter\Traits\HasPageVisitsCounter;

class Video extends Model
{
    use HasPageVisitsCounter;

    public function genre()
    {
        return $this->belongsTo('App\Genre');
    }
}
