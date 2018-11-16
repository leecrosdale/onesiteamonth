<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;
use App\Repository\ThemeRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $theme = ThemeRepository::getCurrentTheme();
        $projects = Project::where('theme_id', $theme->id)->get();
        return view('projects.index', ['projects' => $projects, 'theme' => $theme]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
            $theme = ThemeRepository::getCurrentTheme();
            
            $this->validate($request);         
                       

            Project::create([
                'title' => $request->title,
                'description' => $request->description,
                'repository_url' => $request->repository,
                'image' => $request->image,
                'user_id' => Auth::user()->id,
                'theme_id' => $theme->id,
                'status' => $request->status,
            ]);
            

            return redirect(url('projects'));

    }

    public function validate(Request $request,array $rules = [], array $messages = [], array $customAttributes = []) {
        return Validator::make($request->all(), [
            'title' => 'required|max:255',
            'description' => 'required',
            'repository' => ['required'],
            'image' => ['required'],
            'status' => 'numeric'
        ])->validate();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        return view('projects.view', $project);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('projects.edit', $project);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        $this->validate($request);

        $project->title = $request->title;
        $project->description = $request->description;
        $project->repository = $request->repository;
        $project->image = $request->image;
        $project->save();

        
        return redirect(url('projects'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        if ($project->user_id == Auth::user()->id) {
            $project->delete();
        }

        return redirect(url('projects'));
    }
}
