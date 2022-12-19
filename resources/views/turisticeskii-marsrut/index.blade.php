@extends('layouts.main_layout')

@section('main_title')
    Статьи
@endsection

@section('page_title')
    <h3 class="page_title">
        Туристический маршрут
    </h3>
    @if(\Illuminate\Support\Facades\Gate::check('create_and_edit_articles'))
        <div class="crud_link_container">
            <a href="{{ route('article.create', $category_slug) }}" class="crud_link">
                Создать статью
            </a>
        </div>
    @endif
@endsection


@section('page_content')
    <div class="page_image_container" style="height: 600px">
        <div class="page_image" style="background-image: url(../images/slider_on_main_page/8.jpg); background-position-y: 25%"></div>
    </div>
    <div class="page_subtitle">
        Содержание
    </div>
    <ul class="page_link_list">
        @php
            $i = 0;
        @endphp
        @foreach($articles as $article)
            <li>
                <a href="{{ route('article.show', [$category_slug, $article->slug]) }}" class="page_link_list_item">
                    {{ ++$i .'. Учебный курс «'. $article->title .'»'}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

@push('insert_styles')
    <link rel="stylesheet" href="{{ asset('css/all_articles_page_styles.css') }}">
@endpush
