<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <!-- Styles -->
    </head>
    <body>
        <div>
            {!! ssr('js/Server.js')
            // Share the packages with the server script through context
            ->context('packages', $packages)
            // If ssr fails, we need a container to render the app client-side
            ->render() !!}

        <script>
            // Share the packages with the client script through a JS variable
            window.__PRELOADED_STATE__ = @json(['packages' => $packages]) 
        </script>

        </div>

        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
