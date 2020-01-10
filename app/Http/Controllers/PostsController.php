<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;
use App\Post;

class PostsController extends Controller
{
    public function show($slug)
    {

       // $post =\DB::table('posts')->where('slug', $slug)->first();

       $post = Post::where('slug', $slug)->firstOrFail();

        //dd($post);

        // $posts = [
        //          '123' => 'abd',
        //          'abc' => '123'
        //      ];
            

             return view('post', [
                     'post' => $post
                 ]);
    }

}
