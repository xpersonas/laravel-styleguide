<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('pageTitle', 'Xpersonas')</title>
</head>
<body class="simple-styleguide">
    @include('styleguide::navigation')
    <div class="simple-styleguide-container">
        @yield('content')
    </div>

    {{--Footer scripts & styles.--}}
    @section('footer')
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <style>
            body.simple-styleguide {
                margin: 0;
                padding: 0;
            }

            .simple-styleguide-container {
                width: 90%;
                max-width: 1200px;
                margin: 0 auto;
                padding: 40px;
            }
        </style>
    @show
</body>
