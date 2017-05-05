<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ArticleUserController extends Controller
{
    //
    public function  index($userId)
    {
       $articles = User::find($userId)->articles;
       return view('articles.index',compact('articles'));
    }
}
