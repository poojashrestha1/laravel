<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title'=>"required",
            'keyword'=>"required",
            'description'=>"required",
            'heading'=>"required",
            'shortstory'=>"required",
            'fullstory'=>"required",
            'feature_image'=>"required",
            'category_id'=>"required",
            'user_id'=>"required",
            'status'=>"required"
          ]);
       $cats= new Category([

        'title'=>$request->get('title'),
        'keyword'=>$request->get('keword'),
        'description'=>$request->get('description'),
        'heading'=>$request->get('heading'),
        'shortstory'=>$request->get('shortstory'),
        'fullstory'=>$request->get('fullstory'),
        'feature_image'=>$request->get('feature_image'),
        'category_id'=>$request->get('category_id'),
        'user_id'=>$request->get('user_id'),
        'status'=>$request->get('status')
      ]);
      $cats->save();
      return redirect('/cats')->with('success', 'Category Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        //
    }
}
