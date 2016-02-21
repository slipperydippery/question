<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    protected $fillable = [
    	'title',
    	'description',
    	'order',
    	'user_id',
    	'created_at',
    	'updated_at'
    ];

    public function questions ()
    {
    	return $this->morphMany('App\Question', 'questionable')->orderBy('order');
    }

    public function route()
    {
        return 'templates/' . $this->id;
    }

    public function type()
    {
        return 'App\\Template';
    }
}
