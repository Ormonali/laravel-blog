<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Tag;
use App\article_tags;

class Pagescontroller extends Controller
{
    public function index(){
    	$title = 'Добро пожаловать в мой блог!';
    	return view('pages.index')->with('title', $title);
    }

}
