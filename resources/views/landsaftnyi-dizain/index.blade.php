@extends('layouts.main_layout')

@section('main_title')
    Ландшафтный дизайн
@endsection

@section('page_title')
    <h2 class="category_title">
        Ландшафтный дизайн
    </h2>
    @if(\Illuminate\Support\Facades\Gate::check('create_and_edit_articles'))
        <div class="crud_link_container">
            <a href="{{ route('article.create', $category_slug) }}" class="crud_link">
                Создать статью
            </a>
        </div>
    @endif
@endsection


@section('page_content')
    <div class="page_image_container">
        <div class="page_image" style="background-image: url(../images/slider_on_main_page/1.jpg); background-position-y: 40%"></div>
    </div>
    <div class="page_image_container" style="height: 650px;">
        <div class="page_image" style="background-image: url(../images/slider_on_main_page/3.jpg); background-position-y: 0%"></div>
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
                    {{ ++$i .'. '. $article->title}}
                </a>
            </li>
        @endforeach
    </ul>
@endsection

@push('insert_styles')
    <link rel="stylesheet" href="{{ asset('css/all_articles_page_styles.css') }}">
@endpush
