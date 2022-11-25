<?php

namespace App\Http\Controllers;

use App\Models\Homenew;
use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        $New = Homenew::orderBy('id', 'desc')->paginate(25);  
        return  view('home.news', compact('New'));
    }
    public function show(Homenew $New)
    {
        return view('home.newshow', compact('New'));
    }
}
