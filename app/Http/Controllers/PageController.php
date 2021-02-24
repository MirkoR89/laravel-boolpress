<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function articles_api()
    {
         return  view('spa.articles');
    }
}
