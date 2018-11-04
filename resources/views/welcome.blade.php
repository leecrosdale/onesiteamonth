@extends('layouts.app')

@section('content')
<div class="container background">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <welcome-page-component></welcome-page-component>
        </div>
        <div class="col-md-6 py-5">
            @include('auth.register')
        </div>
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
