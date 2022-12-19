<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('main_title')</title>
    <link rel="stylesheet" href="{{ asset('css/fonts/Golos UI/Golos-UI_Regular.css') }}">
    <link rel="stylesheet" href="{{ asset('css/clearing_css_file.css') }}">
    <link rel="stylesheet" href="{{ asset('css/common_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth_styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
</head>
<body>
<div class="wrapper">
    <div class="template">
        <div class="auth_title">
            @yield('auth_title')
        </div>
        @yield('auth_form')
    </div>
</div>
</body>
</html>
