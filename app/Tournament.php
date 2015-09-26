<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

Class Tournament extends Model {

    protected $table = 'tournaments';

    protected $fillable = ['title', 'location', 'date', 'details', 'events'];

    public function users()
    {
        return $this->belongsTo('App\User');
    }
}