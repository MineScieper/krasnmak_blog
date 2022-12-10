@extends('layouts.main_layout')

@section('main_title')
    {{ $article->title }}
@endsection

@section('page_title')
    <h3 class="page_title">
        {{ $article->title }}
    </h3>
    @if(\Illuminate\Support\Facades\Gate::check('create_and_edit_articles'))
        <div class="crud_link_container">
            <a href="{{ route('article.edit', [$category_slug, $article->slug]) }}" class="crud_link">
                Редактировать статью
            </a>
        </div>
    @endif
@endsection


@section('page_content')

    <div class="article_content">
        {!! $article->content !!}
{{--    (фигурные скобки с восклицательными знаками позволяют выводить форматированный текст, а не обычный текст с тегами (<p>, <strong> и т.д.))--}}
    </div>

@endsection
