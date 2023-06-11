<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">

        <title> 管理画面 @yield('title')</title>
    </head>
    <body>
@auth('admin')

@endauth
@yield('contets')


    </body>
</html>