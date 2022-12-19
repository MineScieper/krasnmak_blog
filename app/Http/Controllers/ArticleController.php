<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    public function index($category_slug) {
        $category = Category::where('category_slug', $category_slug)->firstOrFail();
        $articles = Article::where('category_id', $category->id)->orderBy('created_at', 'asc')->get(); //->paginate(5);
        return view($category_slug.'.index', compact('category_slug','articles'));
    }

    public function create($category_slug) {
        if (Gate::check('create_and_edit_articles')) {
            $categories = Category::all();
            $main_category = Category::where('category_slug', $category_slug)->firstOrFail();
            return view('articles.create', compact('category_slug', 'categories', 'main_category'));
        }
        return back();
    }

    public function store($category_slug, Request $request) {
        $request->validate([
            'title' => 'required|string|unique:articles',
        ]);
        $form = $request->all();
        $slug = Str::slug($form['title'], '-');
        $form['slug'] = $slug;
        Article::create($form);
        return redirect()->route('article.show', [$category_slug, $slug]);
    }

    public function show($category_slug, $slug) {
        $article = Article::where('slug', $slug)->firstOrFail();
        return view('articles.show', compact('category_slug', 'article'));
    }

    public function edit($category_slug, $slug) {
        $article = Article::where('slug', $slug)->firstOrFail();
        if (Gate::check('create_and_edit_articles')) {
            $categories = Category::all();
            return view('articles.edit', compact('category_slug', 'slug', 'article', 'categories'));
        }
        return back();
    }

    public function update($category_slug, $slug, Request $request) {
        $article = Article::where('slug', $slug)->firstOrFail();
        if ($request->title != $article->title) {
            $request->validate([
                'title' => 'required|string|unique:articles',
            ]);
        } else {
            $request->validate([
                'title' => 'required|string',
            ]);
        }
        $form = $request->all();
        $slug = Str::slug($form['title'], '-');
        $form['slug'] = $slug;
        $article->update($form);
        return redirect()->route('article.show', [$category_slug, $slug]);
    }
}
