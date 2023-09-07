<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class CommentController extends Controller
{
      //getting user id
      public function getUserData()
      {
          $userId = auth()->user()->id;
          $user = User::find($userId);
      
      }
      //getting post id
      public function getPostData()
      {
         
          $post = Post::find($postId);
      
      }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $c=Comment::get();
        return view('comment/index',compact('c'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('comment/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user
        $comment = $request->input('comment');// Assuming the text input comes from the request
    
        $comment = new Comment([
            'user_id' => $user->id,
            'post_id' => $post->id,
            'comment' => $title,
            
        ]);
        $comment->save();
    }

    /**
     * Display the specified resource.
     */
    public function show(Comment $comment)
    {
        $comment=Comment::all($id);
         return response()->json($comment);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comment $comment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comment $comment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comment $comment)
    {
        $comment->delete();
         return redirect (url('index-comment'));
    }
}
