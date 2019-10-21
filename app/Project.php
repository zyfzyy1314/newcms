<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //

    public function user(){
//关联
        return $this->belongsTo('APP\User','user_ids');
    }
}
