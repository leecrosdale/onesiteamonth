<?php

namespace App\Http\Controllers\Api;

use App\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class ProjectController extends Controller
{  

    public function all() {
        return response()->json(Project::with('theme.theme_idea')->get());
    }

    public function projectsByUserId(User $user) {             
        return response()->json($user->projects()->with('theme.theme_idea')->get());
    }    

}
