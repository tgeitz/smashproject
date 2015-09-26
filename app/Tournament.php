<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Tournament extends Model {

    protected $table = 'tournaments';

    protected $fillable = ['title', 'location', 'date', 'details', 'events', 'user_id'];

    public function users()
    {
        $this->doStuff();
        return $this->belongsTo('App\User');
    }

    private function doStuff()
    {
        return true;
    }
}