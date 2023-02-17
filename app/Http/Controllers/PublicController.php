<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index(){
        $articles = Article::paginate(16);
        return view('welcome', compact('articles'));
    }
    public function show(Article $article){
        return view('show', compact('article'));
    }
}
