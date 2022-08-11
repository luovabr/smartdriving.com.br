<?php

namespace App\Http\Controllers;

use App\Article;
use App\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the dashboard page.
     *
     * @return mixed
     */
    public function dashboard()
    {
        return view('dashboard.index');
    }

    /**
     * Search the article by keyword.
     *
     * @param Request $request
     *
     * @return mixed
     */
    public function search(Request $request)
    {
        $key = trim($request->get('q'));

        $articles = Article::query()->where('title', 'like', "%{$key}%")
            ->orWhere('content', 'like', "%{$key}%")
            ->orderBy('published_at', 'desc')
            ->get();

        return view('search', compact('articles'));
    }
    public function index()
    {
        return view('home.index');
    }
    public function insurance()
    {
        return view('home.insurance');
    }
    public function driver()
    {
        return view('home.driver');
    }
    public function dealer()
    {
        return view('home.dealer');
    }
    public function cases()
    {
        $category = Category::query()->where('name', 'Cases de Sucesso')->first();
        if (!$category) {
            abort(404);
        }
    
        $articles = $category->articles;
        return view('home.cases',compact('category','articles'));
    }
    public function contact()
    {
        return view('home.contact');
    }
    public function fleet()
    {
        return view('home.fleet');
    }
    public function maker()
    {
        return view('home.maker');
    }
    public function about()
    {
        return view('home.about');
    } 
    public function terms()
    {
        return view('home.terms');
    }
    public function politics()
    {
        return view('home.politics');
    } 
    public function faq()
    {
        return view('home.faq');
    }    
    public function  analytics()
   {
	return view('home.analytics');
   }
}
