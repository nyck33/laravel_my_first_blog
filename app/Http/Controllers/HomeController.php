<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = DB::table('users')->leftjoin('posts', 'users.id', '=', 'posts.author')->paginate(10);
        return view('home', ['posts' => $posts]);
    }
    //uses laravel query builder to join posts table and users table using leftjoin method
    //pass a variable 'posts' available on home.blade.php and array of data to view 

    public function getPostForm()
    {
        return view('post/post_form');
    }

    public function createPost(Request $request)
    {
        $post = Post::create(array(
            'title' => Input::get('title'),
            'description' => Input::get('description'),
            'author' => Auth::user()->id
        ));
        return redirect()->route('home')->with('success', 'Post has been successfully added!');
        //->with('success', ''), first parameter is the variable for the second param message
    }

    public function getPost($id)
    {
        $post = Post::find($id);
        return view('post/post_detail', ['post' => $post]);
    }

    public function editPost($id)
    {
        $post = Post::find($id);
        return view('post/edit_post', ['post' => $post]);
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->description = $request->description;
        $post->save();
        return redirect()->route('home')->with('success', 'Post has been updated successfully');
    }

    public function deletePost($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('home')->with('success', 'Post has been deleted successfully');
    }
}
