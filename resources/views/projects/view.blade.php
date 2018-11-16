@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $title }} by {{ $user['name'] }} </div>
                <div class="card-body">            

                    <div class="row">
                        <div class="col-md-3">
                            Description
                        </div>
                        <div class="col-md-9">
                            {{ $description }}
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            Theme
                        </div>
                        <div class="col-md-9">
                            {{ $theme['theme_idea']['title'] }}
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-md-3">
                            Repository
                        </div>
                        <div class="col-md-9">
                            <a href="{{ $repository_url }}" target="_blank">{{ $repository_url }}</a>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-3">
                            Status
                        </div>
                        <div class="col-md-9">
                            {{ $status_text }}
                        </div>
                    </div>
    
                    <div class="row">
                        <div class="col-md-3">
                            Image
                        </div>
                        <div class="col-md-9">
                            <img src="{{ $image }}" style='width:300px' />
                        </div>
                    </div>

                    

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
