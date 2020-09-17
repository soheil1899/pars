<?php

namespace App\Http\Controllers\Client;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        return view('client.index');
    }
    public function blog()
    {
        $page_title = 'اخبار و مطالب سایت';
        $page_description = 'توضیحات مربوط به اخبار و مطالب سایت';

        return view('client.blog', compact('page_title', 'page_description'));
    }
    public function getBlog($url)
    {
        $article = Article::where('url', $url)->first();
        $page_title = $article['title'];
        $page_description = $article['description'];

        return view('client.single-blog', compact('article','page_title', 'page_description'));
    }
    public function shop()
    {
        return view('client.shop');
    }
}
