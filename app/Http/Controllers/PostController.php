<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Mail\Mailables\Content;

class PostController extends Controller
{
    public function index()
    {
        $posts=Post::paginate(25)->reverse();
        // $posts = Post::where('content', 'c1')
        //     ->orwhere('content', 'c')
        //     ->get();
 
        foreach ($posts as $post) {
            dump($post->title);
        }
        dd('end');
    }


    public function create()
    {
        $postsArr = [
            [
                'title' => 't4',
                'content' => 'c4',
            ],
            // [
            //     'title' => 't5',
            //     'content' => 'c5',
            // ]
        ];
// Post::create($postsArr['1']);
        foreach ($postsArr as $item) {
            Post::create($item);
            dump($item);
        }

        dump('created');
    }

    public function update()
    {
        $lastPost = Post::latest()->first();
        $lastPost->update([
            'title' => 't_updated',
            'content' => 'c_update',
        ]);
        dd('updated');
        // $posts = Post::where('content', 'c1')->get();
    }

    public function delete()
    {
        $lastPost = Post::latest()->first();
        $lastPost->delete();
        dump($lastPost);
        dd('deleted');
    }

    public function firstOrCreate (){
        $post = Post::firstOrCreate(
            ['title' => '2222Заголовок поста'],
            ['content' => 'Содержание поста']
        );
        dd('firstOrCreated');
    }

    public function updateOrCreate (){
        $post = Post::updateOrCreate(
            ['title' => 'Заголовок поста'],
            ['content' => 'update Содержание поста']
        );
        dd('updateOrCreated');
    }
}

