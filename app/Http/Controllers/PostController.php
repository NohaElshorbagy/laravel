<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data= Post::all();
        return view('posts.index',['posts'=>$data]);
  
      

    //   dd(Post::find(5)) ; 
    // Post::where('user_id',1)->delete();
    // Post::withTrashed()->where('user_id',1)->forceDelete();
    // dd(Post::count());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data= Post::all();

 
        return view('posts.create',['posts'=>$data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = new Post();
 
        $post->title = $request->title;
        $post->body = $request->body;
        $post->enabled = $request->enabled;
        $post->user_id = $request->user_id;
 
        $post->save();
 
        return redirect('posts');
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
        $post = Post::find($id);
        return view('posts.edit',compact('post'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->enabled = $request->enabled;
        $post->user_id = $request->user_id;
 
        $post->save();
        return redirect('posts');    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $post = Post::find($id);

        $post->delete();

        return redirect()->route('posts.delete');   
     }
     
     public function delete(Request $request) 
{
    $data =Post::onlyTrashed()->get();
    return view('posts.delete',['posts'=>$data]);

}
public function restore ($id) 
{
    $post = Post::onlyTrashed()->findOrFail($id);
    $post->restore();
    return redirect()->back()->with('success','Category has been restored successfully!');
    // return redirect()->route('posts.index',['posts'=>$post]);  

}

}
