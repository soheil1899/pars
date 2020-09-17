<?php

namespace App\Http\Controllers\Client;

use App\Models\Article;
use App\Models\Article_group;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ArticleController extends Controller
{
    public function getArticles(Request $request)
    {
        if ($request->category_id != 0)
            return Article::whereHas('article_group', function (Builder $query) use ($request) {
                $query->where('id', $request->category_id);
            })->with('article_group')->paginate(5);

        return Article::with('article_group')->paginate(5);
    }

    public function getArticle(Request $request)
    {
        return Article::where('id', $request->articleid)->with('keywords', 'article_group', 'tags', 'contents', 'user', 'pdf', 'galleries', 'attributes')->first();
    }

    public function getArticleGroup()
    {
        return Article_group::all();
    }
}
