<?php

namespace App\Http\Controllers\Api;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repository\ThemeRepository;

class ThemeController extends Controller
{
   
    public function current() {               
        return response()->json(ThemeRepository::getCurrentTheme());
    }

    public function currentProjects() {
        // TODO: Return projects that have been added this month.
    }

}
