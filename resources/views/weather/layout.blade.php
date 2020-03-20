<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="/css/app.css">

        <title>{{ config('app.name') }}</title>
    </head>

    <body>
        <div id="app">
            <div class="container">
                <div class="row mt-5">
                    <div class="col-12 text-center">
                        <h1>{{ config('app.name') . ' App' }}</h1>
                        <hr>

                    </div>
                </div>
            </div>
            @yield('contents')
        </div>


        <script src="{{ mix('/js/app.js') }}"></script>
    </body>

</html>
