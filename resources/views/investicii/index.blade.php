@extends('layouts.main_layout')

@section('main_title')
    Инвестиции
@endsection

@section('page_title')
    <h2 class="category_title">
        Инвестиции
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
{{--  investicii_photo_1 --}}
    <div class="page_image_container" style="height: 800px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_1.jpg); background-position-y: 0%"></div>
    </div>
    <div class="page_image_container" style="height: 830px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_2.jpg); background-position-y: 0%"></div>
    </div>
    <div class="page_image_container" style="height: 820px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_3.jpg); background-position-y: 0%"></div>
    </div>
    <div class="page_image_container" style="height: 800px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_4.jpg); background-position-y: 0%"></div>
    </div>
    <div class="page_image_container" style="height: 660px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_5.jpg); background-position-y: 0%"></div>
    </div>
    <div class="page_image_container" style="height: 900px">
        <div class="page_image" style="background-image: url(../images/investicii_photo_6.jpg); background-position-y: 0%"></div>
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
