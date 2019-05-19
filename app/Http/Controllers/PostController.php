<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;
use App\Post;
use Illuminate\Http\Response;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     // checks for login before going to cats
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        $posts = post::all(); 
        return view('back.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=category::all();
       // dd($cats);
        return view('back.posts.create', compact('cats'));
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
            'title'=>'required|string|min:5',
            'heading'=>'required|string|min:5',
            'keyword'=>'required|string|min:5',
            'shortstory'=>'required|string|min:5',
            'status' => 'required|boolean',
            'files' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($request->hasFile('files'))
        {
          $extension = $request->file('files')->getClientOriginalExtension();
          $fileNameToStore = time() . '.' .$extension;
          //upload image
          $file = $request->file('files');
          $destinationPath = public_path('/uploads');
          $file->move($destinationPath, $fileNameToStore);
        }
        else{
            return redirect()->back()->withInput($request->input())->with('error', 'file not selected');
        }


        $posts = new Post([
            'title' => $request->get('title'),
            'keyword'=>$request->get('keyword'),
            'description'=> $request->get('description'),
            'heading'=>$request->get('heading'),
            'shortstory'=>$request->get('shortstory'),
            'fullstory'=>$request->get('fullstory'),
            'category_id'=>$request->get('category_id'),
            'status'=> $request->get('status'),
            'fimage'=>$fileNameToStore
        ]);
        $posts->save();
        return redirect('/posts')->with('success', 'Post added successfully');
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
        $posts = Post::find($id); 
        return view('back.posts.edit', compact('posts'));
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
        $posts = post::find($id);
        $posts->title = $request->get('title');
        $posts->keyword = $request->get('keyword');
        $posts->description =  $request->get('description');
        $posts->heading = $request->get('heading');
        $posts->shortstory =$request->get('shortstory') ;
        $posts->fullstory =$request->get('fullstory') ;
        $posts->fimage =$request->get('fimage');
        $posts->category_id =$request->get('category_id') ;
        
        $posts->status = $request->get('status');
        $posts->save();

        return redirect('/posts')->with('success', 'Post has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $posts = post::find($id);
        $posts->delete();
   
        return redirect('/posts')->with('success', 'Post has been deleted Successfully');
    }
}
