<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;


class PagesController extends Controller
{

    public function about()
    {
        $pages = Page::query()->where('id','1')->get();
        return view('site.pages.about' ,['pages' => $pages] );
    }

    public function contact()
    {
        $pages = Page::query()->where('id','2')->get();
        return view('site.pages.contact' , [ 'pages' => $pages ] );
    }

}
