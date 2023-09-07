<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
<<<<<<< HEAD
     //getting user id
     public function getUserData()
     {
         $userId = auth()->user()->id;
         $user = User::find($userId);
     
     }
     /**
      * Display a listing of the resource.
      */
     public function index()
     {
         $p=Post::get();
         return view('post/index',compact('p'));
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
             'user_id' => $user->id,
             'title' => $title,
             'body' => $body,
         ]);
         $post->save();
     }
 
     /**
      * Display the specified resource.
      */
     public function show(string $id)
     {
         $post=Post::all($id);
         return response()->json($post);
     }
 
     /**
      * Show the form for editing the specified resource.
      */
     public function edit(string $id)
     {
         //
     }
 
     /**
      * Update the specified resource in storage.
      */
     public function update(Request $request, string $id)
     {
         $data=$request->validate([
             'title'=> 'required',
             'body'=> 'required',
             'user_id'=>'required',
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
=======
    //getting user id
        public function getUserData()
    {
        $userId = auth()->user()->id;
        $user = User::find($userId);

    
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $p=Post::get();
        return view('post/index',compact('p'));
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
            'user_id' => $user->id,
            'title' => $title,
            'body' => $body,
        ]);
        $post->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post=Post::all($id);
        return response()->json($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data=$request->validate([
            'title'=> 'required',
            'body'=> 'required',
            'user_id'=>'required',
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
>>>>>>> post
}
