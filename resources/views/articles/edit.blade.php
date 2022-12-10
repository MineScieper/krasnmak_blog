@extends('layouts.article_CRUD_layout')

@section('main_title')
    Редактирование статьи
@endsection

@section('page_title')
    <a href="{{ route('article.show', [$category_slug, $slug]) }}" class="submit_button">
        Вернуться назад
    </a>
    <div class="page_title">
        Редактирование статьи
    </div>
    <button form="article_create_form" type="submit" class="submit_button">
        Сохранить изменения
    </button>
@endsection


@section('page_content')

    <form action="{{ route('article.update', [$category_slug, $slug]) }}" method="post" class="new_article_form" id="article_create_form">
        @csrf
        @method('patch')
        <div class="new_article_form_item">
            <label class="new_article_label" for="new_article_title">Заголовок статьи</label>
            <input name="title" type="text" class="new_article_input" id="new_article_title" value="{{ $article->title }}">
        </div>
        <div class="new_article_form_item">
            <label for="new_article_category" class="new_article_label">Категория</label>
            <select name="category_id" id="new_article_category" class="new_article_input">
                @foreach($categories as $category)
                    <option
                        @php
                            if ($category->id == $article->category_id) {
                                $selected = 'selected';
                            } else $selected = '';
                        @endphp
                        {{ $selected }}
                        value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="new_article_form_item">
            <label class="new_article_label" for="new_article_content">Текст статьи</label>
            <textarea name="content" id="textarea_editor">{{ $article->content }}</textarea>
        </div>
    </form>

    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection

@push('insert_scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        let editor = CKEDITOR.replace('textarea_editor');
        CKFinder.setupCKEditor(editor);
    </script>
@endpush
