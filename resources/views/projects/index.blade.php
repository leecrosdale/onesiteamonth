@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">


                    <div class="card-header">My Projects - <a href="{{ url('projects/create') }}">Add my project</a></div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
    
    
    
                        <projects-list-component :user_id="{{Illuminate\Support\Facades\Auth::user()->id}}"></projects-list-component>
    
                        
                    </div>

                <div class="card-header">All Projects</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif



                    <projects-list-component></projects-list-component>

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
