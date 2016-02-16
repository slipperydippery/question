<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answeroption extends Model
{
    protected $fillable = [
    	'answer',
    	'clarification',
    	'question_id',
    	'created_at',
    	'updated_at'
    ];
}
