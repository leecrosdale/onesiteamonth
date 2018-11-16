<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{


    protected $fillable = ['title','description','image','repository_url','user_id','theme_id','status'];

    public function theme() {
        return $this->belongsTo('App\Theme');
    }

    public function user() {
        return $this->belongsTo('App\User');
    }


    protected $status_texts = [
        'Not Active', 
        'In Progress', 
        'Finished'
    ];

    public function getStatus() {
        return $this->status_texts[$this->status];
    }

    public function toArray() {
        $data = parent::toArray();

        $data['status_text'] = $this->getStatus();
        
        return $data;

    }
    
}
