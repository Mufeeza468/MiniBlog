<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{

    function comment()
    {
        return Comment::all();
    }
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
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = Auth::user(); // Get the currently authenticated user
    
            $cmt = new Comment([
                'user_name' => $user->name,
                'post_id' => $request->input('post_id'),
                'comment' => $request->input('comment'),
            ]);
            $cmt->save();
    
            return redirect( url('index-post'));
        
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
