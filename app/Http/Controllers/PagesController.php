<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function about()
    {
    	$first	= 'Dave';
    	$last	= 'Listen';
    	return view('pages.about', compact('first','last'));
    }

    public function app()
    {
    	return view('app');
    }
}
