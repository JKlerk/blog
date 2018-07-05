<?php

namespace App\Http\Controllers;

use App;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function listArticle()
    {
    	$articles = App\Article::all();
    	return view('articles.index', compact('articles'));
    }

    public function createArticle()
    {
    	return view('articles.create');
    }

	public function editArticle($id)
    {
        $article = App\Article::find($id);
        return view('articles.edit', compact('article'));
    }

    public function postArticle(Request $request)
    {
    	$request->validate([
    		'title' => 'required',
    		'author' => 'required',
            'desc' => 'required',
    		'body' => 'required'
    	]);

    	$article = new App\Article;

    	$article->title = $request->title;
    	$article->author = $request->author;
        $article->desc = $request->desc;
    	$article->body = $request->body;

    	$article->save();

    	return redirect(url('/articles'));
    }

    public function editRequest(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'desc' => 'required',
            'body' => 'required'
        ]);

        $article = App\Article::find($id);

        $article->title = $request->title;
        $article->author = $request->author;
        $article->desc = $request->desc;
        $article->body = $request->body;

        $article->save();

        return redirect(url('/articles'));
    }

    public function delete($id)
    {
        $article = App\Article::find($id);

        $article->delete();
        return redirect(url('/articles'));        
    }
}
