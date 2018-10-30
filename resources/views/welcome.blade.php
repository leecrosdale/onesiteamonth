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

        
    </head>
    <body>
        <div class="bg-blue-light text-center text-white h-screen content-center">
                

            <h1 class="text-5xl">One site a month challenge!</h1>
            <h2 class="text-normal">Join and build one site a month with a theme!</h2>

            <button class="bg-transparent hover:bg-blue text-white font-semibold hover:text-white py-2 px-4 border border-blue hover:border-transparent rounded">
                View Projects
              </button>              
              <button class="bg-blue hover:bg-blue-light text-white font-bold py-2 px-4 border-b-4 border-blue-dark hover:border-blue rounded">
                Join
              </button>



        </div>
    </body>
</html>
