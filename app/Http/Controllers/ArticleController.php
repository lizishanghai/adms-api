<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

    public function index()
    {
        return Article::all();
    }

    public function show($id)
    {
        return Article::find($id);
    }

    public function store(Request $request)
    {
        return Article::create($request->all());
        return response()->json($article, 201);

    }

    public function update(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->update($request->all());

        return response()->json($article, 200);
    }

    public function delete(Request $request, $id)
    {
        $article = Article::findOrFail($id);
        $article->delete();

        return response()->json(null, 204);
    }
}
