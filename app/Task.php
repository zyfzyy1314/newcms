<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    protected $fillable = [
        'name', 'complete', 'project_id',
    ];


    public function project()
    {
        return $this->belongsTo('App\Project','project_id') ;       
    }
    
    public function steps()
    {
        return $this->hasMany('App\Step');
    }
}
