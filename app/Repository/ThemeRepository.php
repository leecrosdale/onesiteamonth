<?php

namespace App\Repository;

use App\Theme;


class ThemeRepository {

    public static function getCurrentTheme() {
        $now = now()->toDateTimeString();       
        return Theme::where('start_date', '<=', $now)->where('end_date', '>=', $now)->where('active',1)->with('theme_idea')->first();        
    }
}