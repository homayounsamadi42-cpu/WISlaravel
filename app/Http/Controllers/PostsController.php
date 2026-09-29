<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $post="all posts";
        return $post;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return "this is the form ";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "new post stored";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "user id".$id;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return "let's make some edits whit the user id:".$id;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
