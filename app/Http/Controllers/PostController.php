<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    public function index (){
        $posts = Post::with('user')->orderBy('created_at', 'desc')->get();
        return view('dashboard', compact('posts'));
    }

    public function store (Request $request){
        $validate = $request->validate([
            'title'=>'required|string',
            'content'=>'required|string'
        ]);

        Post::create([
            'user_id'=> Auth::id(),
            'title'=> $validate['title'],
            'content'=> $validate['content'],
        ]);

        return redirect()->route('dashboard');
    }
}
