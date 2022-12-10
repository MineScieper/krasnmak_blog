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
    <link rel="stylesheet" href="{{ asset('hystModal-0.4/src/hystmodal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slider_styles.css') }}">
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
</div>
<script src="{{ asset('js/slider_script.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('hystModal-0.4/dist/hystmodal.min.js') }}"></script>
<script>
    const myModal = new HystModal({
        linkAttributeName: "data-hystmodal",
        //настройки, см. API
        backscroll: false,
        catchFocus: false,
    });
</script>
<script src="{{ asset('js/phone_form.js') }}"></script>
<script src="{{ asset('js/form_send.js') }}"></script>
</body>
</html>
