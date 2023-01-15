@extends('layouts.article_CRUD_layout')

@section('main_title')
    Создание статьи
@endsection

@section('page_title')
    <a href="{{ route('article.index', $category_slug) }}" class="submit_button">
        Вернуться назад
    </a>
    <div class="page_title">
        Создание статьи
    </div>
    <button form="article_create_form" type="submit" class="submit_button">
        Создать
    </button>
@endsection

@section('page_content')

    <form action="{{ route('article.store', $category_slug) }}" method="post" class="new_article_form" id="article_create_form">
        @csrf
        <div class="new_article_form_item">
            <label class="new_article_label" for="new_article_title">Заголовок статьи</label>
            <input name="title" type="text" class="new_article_input" id="new_article_title" value="{{ old('title') }}">
        </div>

        @if ($errors->any())
            <div style="margin-bottom: 20px">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="new_article_form_item">
            <label for="new_article_category" class="new_article_label">Категория</label>
            <select name="category_id" id="new_article_category" class="new_article_input">
                @foreach($categories as $category)
                    <option
                        @php
                            if ($category->id == $main_category->id) {
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
            <textarea name="content" id="textarea_editor"> {{ old('content') }} </textarea>
        </div>
    </form>

@endsection

@push('insert_scripts')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('ckfinder/ckfinder.js') }}"></script>
    <script>
        let editor = CKEDITOR.replace('textarea_editor');

        // editor.on( 'paste', function( evt ) {
        //     evt.data.dataValue = evt.data.dataValue.replace( /\s*FONT-SIZE: [^\s;]+;?"/gi, "\"" );
        // });

        editor.on( 'paste', function( evt ) {
            // Create a standalone filter passing 'p' and 'b' elements.
            let filter = new CKEDITOR.filter( 'p b u i li ul ol table tbody tr td {text-align}' ),
                // Parse the HTML string to a pseudo-DOM structure.
                fragment = CKEDITOR.htmlParser.fragment.fromHtml( evt.data.dataValue ),
                writer = new CKEDITOR.htmlParser.basicWriter();

            filter.applyTo( fragment );
            fragment.writeHtml( writer );
            evt.data.dataValue = writer.getHtml();
        } );

        // editor.on( 'paste', function( evt ) {
        //     // Create a standalone filter passing 'p' and 'b' elements.
        //     let filter = new CKEDITOR.filter( editor ),
        //         // Parse the HTML string to a pseudo-DOM structure.
        //         fragment = CKEDITOR.htmlParser.fragment.fromHtml( evt.data.dataValue ),
        //         writer = new CKEDITOR.htmlParser.basicWriter();
        //
        //     filter.applyTo( fragment );
        //     fragment.writeHtml( writer );
        //     evt.data.dataValue = writer.getHtml();
        // } );

        CKFinder.setupCKEditor(editor);
    </script>
@endpush
