<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;


class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only' => 'create']);
    }
    public function index()
    {
        $articles = Article::latest('published_at')->published()->get();
        return view('articles.index', compact('articles'));
    }
    public function show($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.show', compact('article'));
    }
    public function create()
    {
        return view('articles.create');
    }

    public function store(ArticleRequest $request)
    {
        $article = new Article($request->all());
        Auth::user()->articles()->save($article);
        // Article::create($request->all());
        Session::flash('flash_message','Your message has been created!');
        return redirect('articles');
    }
    public function edit($id)
    {
        $article = Article::findOrFail($id);
        return view('articles.edit',compact('article'));
    }
    public function update($id,ArticleRequest $request)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());
        return redirect('articles');
    }
}
