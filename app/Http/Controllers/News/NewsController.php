<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;

class NewsController extends Controller
{
    public function index(Request $request)
    {
        SEOMeta::setTitle('NgaMinMin Tin Tức');
        SEOMeta::setDescription('NgaMinMin Tin Tức');

        OpenGraph::setDescription('ngaminmin/');
        OpenGraph::setTitle('ngaminmin/tin-tuc/');
        OpenGraph::setUrl('https://ngaminmin.vn/tin-tuc');
        OpenGraph::addProperty('type', 'blog');

        TwitterCard::setTitle('Nga Min Min');
        TwitterCard::setSite('');

        JsonLd::setTitle('Nga Min Min');
        JsonLd::setDescription('NgaMinMin Tin Tức');

        $categorySlug = 'tin-tuc';
        $news = Article::where('status',1)
            ->whereHas('category', function ($query) use ($categorySlug) {
                $query->where('slug', $categorySlug);
        })->paginate(5);

        $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.tin-tuc.index')->with('news', $news)
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();

            return view('pages.tin-tuc.index', ['news' => $news, 'carts' => $carts]);
        }
    }

    public function show(Request $request, $slug)
    {
        $article = Article::where('slug', $slug)->first();

        SEOMeta::setTitle($article->title);
        SEOMeta::setDescription('Nga Min Min/'.$slug);

        OpenGraph::setDescription('Nga Min Min/'.$slug);
        OpenGraph::setTitle($article->title);
        OpenGraph::setUrl(route('tin-tuc.show',['slug' => $slug]));
        OpenGraph::addProperty('type', 'article');
        OpenGraph::addImage(url($article->image));

        TwitterCard::setTitle($article->title);
        TwitterCard::setSite('');

        JsonLd::setTitle($article->title);
        JsonLd::setDescription('Nga Min Min/'.$slug);
        JsonLd::addImage(url($article->image));

         $sessionCookie = config('session.cookie');
        if ($request->Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.tin-tuc.article.index',['article'=> $article])
                ->withCookie($cookie);
        } else {
            $sessionId = $request->Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages.tin-tuc.article.index', ['article' => $article, 'carts' => $carts]);
        }
    }
}
