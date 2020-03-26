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
        return view('welcome');
    }
}
