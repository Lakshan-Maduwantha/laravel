<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Corcel\Model\Page;
use Corcel\Model\Post;
use App\Http\Controllers\BlogController;
class PageController extends Controller
{
    public function about()
    {
        $page = Page::slug('about')->first();
        return view('about',compact('page'));

    }

    public function blog()
    {
        $page = Page::slug('blog')->first();
        echo view('blog',compact('page'));

        $posts = Post::status('publish')
        ->whereIn('post_type', ['post', 'cpt_name', 'other_cpt'])
        ->whereHas('taxonomies', function ($query) {
            $query->whereIn('taxonomy', ['category', 'category2']);
        })
        ->newest()
        ->get();
        echo view('posts.index', compact('posts'));
        
    }

    public function contact()
    {
        $page = Page::slug('contact-us')->first();
        return view('contact',compact('page'));

    }

    public function home()
    {
        $page = Page::slug('home')->first();   
        $image1 = $page->acf->homepage_main_image;
        $image2 = $page->acf->small_image_1;
        $image3 = $page->acf->small_image_2;
        $image4 = $page->acf->small_image_3;     
        $image5 = $page->acf->background_image;     

        echo view('homepage', compact('page','image1','image2','image3','image4','image5'));        

    }

}

