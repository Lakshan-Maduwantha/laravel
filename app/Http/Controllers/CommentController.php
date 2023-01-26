<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Corcel\Model\Comment;

class CommentController extends Controller
{
    public function comm()
    {

        $comments = Comment::approved()->get();
        return view('comm', compact('comments'));


    }
}


