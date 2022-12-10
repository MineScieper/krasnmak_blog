@extends('layouts.main_layout')

@section('main_title')
    Статьи
@endsection

@section('page_title')
    <h3 class="page_title">
        Интерьер с природой
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
    <ul class="all_articles_list">
        @foreach($articles as $article)
            <li class="all_articles_list_item_li">
                <a href="{{ route('article.show', [$category_slug, $article->slug]) }}" class="all_articles_list_item">
                    <div class="all_articles_list_item_title">
                        {{ $article->title }}
                    </div>
                    <div class="all_articles_list_item_text">
                        @php
                            $str = $article->content;
                            $str = strip_tags($str);
                            $str = str_replace("&nbsp;","",$str);
                            $str = Str::words($str, 50);
                        @endphp
                        {!! $str !!}
                    </div>
                </a>
            </li>
        @endforeach
    </ul>
@endsection

@push('insert_styles')
    <link rel="stylesheet" href="{{ asset('css/all_articles_page_styles.css') }}">
@endpush
