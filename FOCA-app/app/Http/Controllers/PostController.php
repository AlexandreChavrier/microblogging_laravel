<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function feed() {
        //On récupère tous les Post
        $posts = Post::with('user')->whereHas('user')->latest()->get();
    
        // On transmet les Post à la vue
        return view("posts.feed", compact("posts"));
    }

    // public function show($id) {
    //     $post = Post::find($id);
    //     return view("posts.show", compact("post"));
    // }

    public function create_post() {
        return view ('posts.create_post');
    }

    public function store(Request $request) {
        // 1. La validation
        // $validateData = $request->validate([
        //     'title' => 'required|string',
        //     "picture" => 'required|image|max:1024',
        //     "content" => 'required',
        // ]);
        
        // 2. On upload l'image dans "/storage/app/public/posts"
        $imageName = time() . '_' . $request->file('picture')->getClientOriginalName();
        $request->file('picture')->move(public_path('images'), $imageName);

        // 3. On enregistre les informations du Post
        $post = Post::create([
            "title" => $request->title,
            "picture" => $imageName,
            "content" => $request->content,
            'user_id' => auth()->id(),
        ]);

        // 4. On retourne vers tous les posts : route("posts.index")
        return redirect(route("feed"));
    }
};
