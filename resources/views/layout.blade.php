<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link @yield('link')>
        <title>コンビニでこども飯</title>
         @livewireStyles
    </head>
    <body>
@yield('contets')
@livewireScripts
    </body>
</html>