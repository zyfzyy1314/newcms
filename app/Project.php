<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = [
        'name', 'thumbnail', 'user_id',
    ];


    public function user(){
//关联
        return $this->belongsTo('App\User','user_id');
    }
}
