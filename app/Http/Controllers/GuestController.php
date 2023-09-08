<?php

namespace App\Http\Controllers;

use App\Models\Guest;
use Illuminate\Http\Request;
use App\Models\Post;

class GuestController extends Controller
{

    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        // Initialize an empty array to store the post IDs
        $postIds = [];

        // Iterate through the posts and extract the IDs
        foreach ($posts as $post) {
            $postIds[] = $post->id;
        }
        return view('guest/index', ['post' => $posts]);
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
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Guest $guest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Guest $guest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Guest $guest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Guest $guest)
    {
        //
    }
}
