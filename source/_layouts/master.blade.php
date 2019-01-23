<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script src='https://www.google.com/recaptcha/api.js'></script>
    </head>

    <body>
        <div class="relative font-sans text-base leading-normal min-h-screen text-grey-darkest bg-neutral-lighter flex flex-col">
            <div class="flex-1">
                @yield('content')
            </div>
        </div>
    </body>
</html>
