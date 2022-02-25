<?php

namespace App\Http\Controllers;

use App\Models\Template;
use Illuminate\Http\Request;

class SiteMapController extends Controller
{
    public function index(){
        $templates=Template::all();
        return response()->view('landing.sitemap', [
            'templates' => $templates
        ])->header('Content-Type', 'text/xml');
    }
}
