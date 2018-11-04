<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Theme extends Model
{
    
    protected $dates = [

        'created_at',
        'updated_at',
        'start_date',
        'end_date'

    ];

    public function theme_idea() {
        return $this->belongsTo('App\ThemeIdea');
    }

}
