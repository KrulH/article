<?php

namespace App\Http\Controllers;

use App\Tag;
use Illuminate\Http\Request;

use App\Http\Requests;

class TagsController extends Controller
{
    public function show($tag)
    {
        $tag = Tag::where('name',$tag)->firstOrFail();
        $articles = $tag->articles;
        return view('articles.index',compact('articles'));
    }
}
