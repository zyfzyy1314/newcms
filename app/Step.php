<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Step extends Model
{
    protected $fillable = [
        'name', 'complete', 'task_id',
    ];


    public function task()
    {
        return $this->belongsTo('App\Task','task_id');       
    }
}
