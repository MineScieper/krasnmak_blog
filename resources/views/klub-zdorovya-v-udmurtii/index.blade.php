@extends('layouts.main_layout')

@section('main_title')
    Клуб здоровья в Удмуртии
@endsection

@section('page_title')
    <h2 class="category_title">
        Клуб здоровья в Удмуртии
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
    <div class="page_image_container" style="display: flex; margin: 0 auto; width: 900px; justify-content: space-between;">
        <img src="../images/klub-zdorovya-v-udmurtii_photo_1.jpg" alt="" style="max-width: 33%">
        <img src="../images/klub-zdorovya-v-udmurtii_photo_2.jpg" alt="" style="max-width: 33%">
        <img src="../images/klub-zdorovya-v-udmurtii_photo_3.jpg" alt="" style="max-width: 33%">
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
