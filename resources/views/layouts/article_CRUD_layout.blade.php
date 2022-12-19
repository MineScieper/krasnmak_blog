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
    <link rel="stylesheet" href="{{ asset('css/article_CRUD_layout_styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
</head>
<body>
<div class="wrapper">
    <main class="main container">
        <div class="page_title_container">
            @yield('page_title')
        </div>
        @yield('page_content')
    </main>
</div>
@stack('insert_scripts')
</body>
</html>
