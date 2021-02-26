<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::latest()->get();
        return view('post.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required'

        ]);
        $photo=$request->file('photo')->store('public/posts');
        Post::create([

            'title'=>$request->title,
            'slug'=>Str::slug($request->title),
            'description'=>$request->description,
            'photo'=>$photo

        ]);
        notify()->success('post Created Successfully!');
        return redirect('/auth/post');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        return view('post.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate=$request->validate([
            'title'=>'required',
            'description'=>'required',
            'photo'=>'required'

        ]);
        $post=Post::find($id);
       $photo=$post->photo;
       if($request->file('photo')){
        $photo=$request->file('photo')->store('public/posts');
        \Storage::delete($post->photo);
       

       }
       $post->title=$request->title;
       $post->description=$request->description;
       $post->photo=$photo;
       $post->update();
       notify()->success('Post Update Successfully!');
       return redirect('/auth/post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $path=$post->photo;
        $post->delete();
        \Storage::delete($path);
        notify()->success('Post Deleted Successfully!');
        return redirect('/auth/post');
    }
}
