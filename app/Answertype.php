<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answertype extends Model
{
    protected $fillable = [
    	'name',
    	'comment',
    	'created_at',
    	'updated_at'
    ];
}
