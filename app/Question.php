<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = [
    	'title',
    	'question', 
    	'clarification', 
    	'order',
    	'answertype_id',
    	'questionable_id', 
        'questionable_type',
    	'created_at',
    	'updated_at'
    ];

    public function answeroptions()
    {
    	return $this->hasMany('App\Answeroption');
    }

    public function answertype()
    {
        return $this->belongsTo('App\Answertype');
    }

    public function questionable()
    {
        return $this->morphTo();
    }
}
