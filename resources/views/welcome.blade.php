@extends('layouts.app')

@section('content')
<div class="container background">
    <div class="row justify-content-center">
        @guest
        <div class="col-md-6 py-1">
        @endguest
        @auth
        <div class="col-md-12 py-1">    
        @endauth
            <welcome-page-component></welcome-page-component>            
        </div>
        @guest
        <div class="col-md-6 py-1">
            @include('auth.register')
        </div>
        @endguest
    </div>

    <div class="row justify-content-center py-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    Completed / Ongoing Projects
                </div>                    
                <div class="card-body">
                    <projects-list-component></projects-list-component>                
                </div>
            </div>
        </div>        
    </div>    

</div>
@endsection
