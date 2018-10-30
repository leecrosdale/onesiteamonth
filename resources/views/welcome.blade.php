<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>One site a month challenge!</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <script src="{{ asset('js/app.js') }}" defer></script>
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link href="{{ asset('css/apptail.css') }}" rel="stylesheet">

        
    </head>
    <body>
        <div class="bg-blue-light text-center text-white h-screen">            
            <div class="flex mb-4 p-6 h-64">
                <div class="w-1/4 bg-blue-light "></div>
                <div class="w-1/2 bg-gradient-brand border-black">

                    <div class="flex">
                            <div class="w-1/2"></div>                            
                            <div class="w-1/4"></div>                            
                            
                            <div class="w-32">Log In</div>                  
                            <div class="w-32">Sign Up</div>                  
                        </div>
                
                    <div class="flex">
                        <div class="w-1/4"></div>
                        <div class="w-1/2 text-center content-center">
                            <p class="text-4xl">One site a month challenge</p>



                        </div>
                        <div class="w-1/4"></div>                  
                    </div>
                
                
                </div>
                <div class="w-1/4 bg-blue-light"></div>
            </div>                                  
        </div>
    </body>
</html>
