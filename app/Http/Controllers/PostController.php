<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    function post()
    {
        return Post::all();
    }
    
    /*
    getting user id
    */
    public function getUserData()
    {
       $user_name = auth()->user()->name;
       $user = User::find($user_name);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $currentUser = Auth::user();

        // Fetch all posts except the ones created by the current user
        $posts = Post::where('user_id', '!=', $currentUser->id)->get();
    
        return view('post/index', ['post' => $posts]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $user = Auth::user(); // Get the currently authenticated user
        $title = $request->input('title'); 
        $body = $request->input('body');// Assuming the text input comes from the request
    
        $post = new Post([
            'user_name' => $user->name,
            'user_id' => $user->id,
            'title' => $title,
            'body' => $body,
        ]);
        $post->save();

        return redirect( url('index-post'));
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(post $post)
    {
        $p = Post::get();
        return view('post/edit', compact('p'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, post $post)
    {
        $data=$request->validate([
            'title'=> 'required',
            'body'=> 'required',
            'user_name'=>'required',
            'user_id' => 'required',
        ]);

        $post->update($data);
        return redirect(url('index-post'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(post $post)
    {
        $post->delete();
        return redirect (url('index-post'));
    }
}
