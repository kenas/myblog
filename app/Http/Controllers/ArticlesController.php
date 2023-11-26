<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Articles;

class ArticlesController extends Controller
{
    public function index(){
        $allArticles = Articles::All();
   
        return view('home', ['allArticles' => $allArticles]);
    }
}
