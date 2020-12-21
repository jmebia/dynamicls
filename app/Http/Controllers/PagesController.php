<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Page;

class PagesController extends Controller
{
    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function home() {

    }

    public function render($page = null)
    {
        // continue to dynamic page rendering
        $page_ = Page::where('name', $page)->first();

        if ( is_null($page_) ) {
            // return without compact to show 404 error
            return view('layouts.main');
        }

        $pages_list = Page::all();

        $page_name = $page_->name;
        // $ds_title = $page_->name;
        $ds_css = $page_->css;
        $ds_header = $page_->header;
        $ds_body = $page_->content;

        return view('layouts.' . $page_->layout, compact('ds_css', 'pages_list', 'page_name', 'ds_header', 'ds_body'));
    }

    

}
