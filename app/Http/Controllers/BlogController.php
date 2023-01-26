<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use Corcel\Model\Post;


class BlogController extends Controller
{

  public function show($id)
  {
    $post = Post::find($id);
    return view('posts.view', compact('post'));
  }


}
  
