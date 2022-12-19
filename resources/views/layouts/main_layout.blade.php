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
    <link rel="stylesheet" href="{{ asset('css/main_layout_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider_styles.css') }}">
    <link rel="stylesheet" href="{{ asset('css/modal-window-styles.css') }}">
    <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">
{{--    @stack('insert_styles')--}}
</head>
<body>
<div class="wrapper">
    @include('layouts.header')
    <main class="main container">
        <div class="page_title_container">
            @yield('page_title')
        </div>
        <div class="article_and_sidebar">
            <article class="article">
                @yield('page_content')
            </article>
            <aside class="sidebar">
                @include('layouts.sidebar')
            </aside>
        </div>
    </main>
    @include('layouts.footer')
    @include('layouts.modal_windows')
</div>
<script src="{{ asset('js/slider_script.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/phone_form.js') }}"></script>
<script src="{{ asset('js/form_send.js') }}"></script>
<script src="{{ asset('js/modal-window-script.js') }}"></script>
</body>
</html>
