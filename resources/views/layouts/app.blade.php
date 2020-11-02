<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Monolist</title>

        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="{{ secure_asset('css/style.css') }}">
    </head>
    <body>
        @include('commons.navbar')<!--ここに"/views/commons/navbar.blade.php"が読み込まれる -->
        @yield('cover')<!--ここに子要素の@section('cover')がページごとに内容が変わって読み込まれる -->
        <div class="container">
            @include('commons.error_messages')<!--ここに"/views/commons/error_messages.blade.php"が読み込まれる -->
            @yield('content')<!--ここに子要素の@section('content')がページごとに内容が変わって読み込まれる -->
        </div>
        @include('commons.footer')<!--ここに"/views/commons/footer.blade.php"が読み込まれる -->
    </body>
  </html>