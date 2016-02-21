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

    public function questions()
    {
        return $this->morphMany('App\Question', 'questionable')->orderBy('order');
    }    

    public function route()
    {
        return 'quests/' . $this->id;
    }

    public function type()
    {
        return 'App\\Quest';
    }
}
