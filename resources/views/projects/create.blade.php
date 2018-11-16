@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Add your Project for {{ $theme->theme_idea->title }}</a></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    


                    <div class="col-md-12 justify-content-center">         
                            
                        <form class="form-group" method="post" action="{{ url('projects') }}">

                            {{ csrf_field() }}
            
                            <label for="title" class="col-form-label">Project Title</label>            
                            <input type="text" name="title" id="title" class="form-control {{ $errors->has('title') ? ' is-invalid' : '' }}" placeholder="e.g My amazing project!" required/>                          
                            @if ($errors->has('title'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('title') }}</strong>
                            </span>
                            @endif
                                
                            <label for="description" class="col-form-label">Description</label>
                            <textarea name="description" id="description"  class="form-control" placeholder="A brief description of your project" required></textarea>
                
                            @if ($errors->has('description'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('description') }}</strong>
                            </span>
                            @endif
                            
                            <label for="status" class="col-form-label">Current Status</label>
                            <select name="status" id="status" class="form-control {{ $errors->has('status') ? ' is-invalid' : '' }}" required>
                                <option></option>
                                <option value="0">Not Active</option>
                                <option value="1">In Progress</option>
                                <option value="2">Finished</option>
                            </select>     
                            
                            @if ($errors->has('status'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('status') }}</strong>
                            </span>
                            @endif

                            <label for="repository" class="col-form-label">Repository Url</label>            
                            <input type="text" name="repository" id="repository" class="form-control {{ $errors->has('repository') ? ' is-invalid' : '' }}" placeholder="e.g https://github.com/leecrosdale/onesiteamonth" required/>                                                      

                            @if ($errors->has('repository'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('repository') }}</strong>
                            </span>
                            @endif

                            <label for="image" class="col-form-label">Image</label>            
                            <input type="text" name="image" id="image" class="form-control {{ $errors->has('image') ? ' is-invalid' : '' }}" placeholder="e.g https://an-image.com/image.gif" required/>                                                      

                            @if ($errors->has('image'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('image') }}</strong>
                            </span>
                            @endif

                            <br/>
                            <div class="form-row">
                                <div class="col-md-3">
                                    <button class="btn btn-primary" type="submit">Create!</button>
                                </div>
                            </div>
                        </form>                        
                    </div>

                    

                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
