<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sheet extends Model
{
	protected $fillable = [
		'quest_id',
		'user_id',
		'created_at',
		'updated_at'
	];


    public function quest()
    {
    	return $this->belongsTo('App\Quest');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

    public function answers()
    {
    	return $this->hasMany('App\Answer');
    }
}
