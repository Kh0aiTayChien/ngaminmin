<?php

namespace App\Http\Controllers\NgaMin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Cart;
use App\Models\SeoMeta as MySeoMeta;;
use Artesaos\SEOTools\Facades\JsonLd;
use Artesaos\SEOTools\Facades\OpenGraph;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\TwitterCard;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
class NgaMinController extends Controller
{
    public function index(Request $request, $section = null)
    {
        $seoMeta = MySeoMeta::first();
        if ($seoMeta) {
            SEOMeta::setTitle($seoMeta->title);
            SEOMeta::setDescription($seoMeta->description);
            SEOMeta::setCanonical($seoMeta->canonical_url);

            OpenGraph::setDescription($seoMeta->og_description);
            OpenGraph::setTitle($seoMeta->og_title);
            OpenGraph::setUrl($seoMeta->og_url);
            OpenGraph::addProperty('type', 'homepage');

            if ($seoMeta->og_image) {
                OpenGraph::addImage(url($seoMeta->og_image));
            } else {
                OpenGraph::addImage(url($images[0]->image_url));
            }

            TwitterCard::setTitle($seoMeta->twitter_title);
            TwitterCard::setSite($seoMeta->twitter_site);

            JsonLd::setTitle($seoMeta->title);
            JsonLd::setDescription($seoMeta->jsonld_description);

            if ($seoMeta->jsonld_image) {
                JsonLd::addImage(url($seoMeta->jsonld_image));
            } else {
                JsonLd::addImage(url($images[0]->image_url));
            }
        }

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

