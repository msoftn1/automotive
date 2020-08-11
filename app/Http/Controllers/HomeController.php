<?php


namespace App\Http\Controllers;

use App\Product;
use App\Review;
use App\News;
use Illuminate\Http\Request;

/**
 * Основной контроллер.
 */
class HomeController extends Controller
{
    /**
     * Главная страница.
     *
     * @param Request $r
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function home(Request $r)
    {
        $reviews = Review::query()
            ->get();

        $products = Product::query()
            ->get();

        $news = News::query()
            ->get();

        return view('home',
            [
                'reviews' => $reviews,
                'products' => $products,
                'news' => $news
            ]
        );
    }
}
