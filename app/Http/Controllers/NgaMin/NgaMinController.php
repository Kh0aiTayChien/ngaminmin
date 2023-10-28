<?php

namespace App\Http\Controllers\NgaMin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class NgaMinController extends Controller
{
    public function index(Request $request)
    {
        SEOMeta::setTitle('MinMinCare');
        SEOMeta::setDescription('Xây dựng độc lập, tự chủ để nâng tầm chất lượng cuộc sống dù bạn là ai, ở đâu hay đội tuổi nào');
        SEOMeta::setCanonical('https://ngaminmin.vn');

        OpenGraph::setDescription('Xây dựng độc lập, tự chủ để nâng tầm chất lượng cuộc sống dù bạn là ai, ở đâu hay đội tuổi nào');
        OpenGraph::setTitle('NgaMinMin');
        OpenGraph::setUrl('https://ngaminmin.vn');
        OpenGraph::addProperty('type', 'blog');
        OpenGraph::addImage('https://ngaminmin.vn/images/nga-min/sec3/34.jpg');

        TwitterCard::setTitle('NgaMinMin');
        TwitterCard::setSite('');

        JsonLd::setTitle('NgaMinMin');
        JsonLd::setDescription('Xây dựng độc lập, tự chủ để nâng tầm chất lượng cuộc sống dù bạn là ai, ở đâu hay đội tuổi nào.');
        JsonLd::addImage('https://ngaminmin.vn/images/nga-min/sec3/34.jpg');

        $news = Article::whereHas('category', function ($query) {
            $query->where('title', 'tin tức');
        })
            ->where('status', 1)->take(6)->get();

        $sessionCookie = config('session.cookie');
        if ($request -> Cookie($sessionCookie) == null) {
            $sessionId = Str::uuid()->toString();
            $cookie = Cookie::make($sessionCookie, $sessionId, 44640);
            return response()
                ->view('pages.nga-min.index', ['news' => $news])
                ->withCookie($cookie);
        } else {
            $sessionId = $request -> Cookie($sessionCookie);
            $carts = Cart::whereHas('session', function ($query) use ($sessionId) {
                $query->where('session_code', $sessionId);
            })->get();
            return view('pages.nga-min.index', ['news' => $news, 'carts' => $carts]);
        }
    }
}

