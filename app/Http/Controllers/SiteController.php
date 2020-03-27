<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Traits\GuzzleTrait;

class SiteController extends Controller
{
    use GuzzleTrait;

    public function callHomePage()
    {
        $this->sendGuzzleRequest('tags', [], 'get');
        return view('pages.home');
    }

    public function callCategoryPage()
    {
        return view('pages.category');
    }

    public function callBlogPage()
    {
        return view('pages.blog');
    }
}
