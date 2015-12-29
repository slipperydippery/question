<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quest extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'description', 'user_id',
    ];
}