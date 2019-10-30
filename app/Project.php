<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    protected $fillable = [
        'name', 'thumbnail', 'user_id',
    ];


    public function user()
    {
//关联
        return $this->belongsTo('App\User','user_id');
    }

    public function tasks()
    {
        return $this->hasMany('App\Task');
    }

    // get get***Attribute 属性获取， *** 为要获取的字段
    public function getThumbnailAttribute($value){
        return $value ?? 'timg.jpg';
    }
}
