<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    protected $fillable = ['title','description','image','repository_url','user_id','theme_id','status'];

    public function theme() {
        return $this->belongsTo('App\Theme');
    }
}
