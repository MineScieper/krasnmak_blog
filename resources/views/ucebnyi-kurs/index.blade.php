@extends('layouts.main_layout')

@section('main_title')
    Учебный курс
@endsection

@section('page_title')
    <h2 class="category_title">
        Учебный курс
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
        <div class="page_image" style="background-image: url(../images/ucebnyi-kurs_photo_1.jpg); background-position-y: 65%"></div>
    </div>
    <div class="page_subtitle">
        Каталог прикладных курсов по озеленению на плотно застроенных территориях
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

    <a href="{{ asset('download_files/График занятий по учебным курсам.docx') }}">
        График занятий по учебным курсам.docx
    </a>
@endsection

