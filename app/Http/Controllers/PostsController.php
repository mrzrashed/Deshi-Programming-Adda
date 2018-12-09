<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//Here we extending the Posts model in order to get the posts
use App\Post;

class PostsController extends Controller
{
    //We gonna need the following functions
    //1.Index (Gonna be the listing of all the posts)
    //2.Create (To create a post)
    //3.Edit (Takes care of updating a post or something related to posts)
    //4.Update (Updates the edited data into the database)
    //5.Store (Takes care of submitting a new post to the model whcih will be stord through migrations into database)
    //6.Show (Take care of viewing a post or multiple posts)
    //7.Destroy (Take care of deleting a post)
    
    public function index(){
        //Using Post model to get all the posts
        $posts = Post::all();
        //Returning a view for all the posts 
        return view('posts.index')->with('posts',$posts);
    }

    public function create(){
        return view('posts.create');
    }

    public function store(Request $request){
         $this->validate($request,
        [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post;
        $post ->post_title = $request->input('title');
        $post ->post_category = $request->input('category');
        $post ->post_body = $request->input('body');
        $post ->save();


        return redirect('posts.index')->with('success','Post created');
    }

    public function show($id){
        //This will find the id that the user will click from the database
        $post = Post::where('post_id','=',$id)->get()->first();
        //This will return the view with the post details
        return view('posts.show')->with('post',$post);
    }

    public function showtop($id){
        //This will find the id that the user will click from the database
        $post = Post::where('post_id','=',$id)->get()->first();
        //This will return the view with the post details
        return view('pages.topqustions')->with('post',$post);
    }


    public function edit($id){
        $post = Post::where('post_id','=',$id)->get()->first();
        return view('posts.edit')->with('post',$post);

    }

    public function update(Request $request,$id){
         $this->validate($request,
        [
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = Post::where('post_id','=',$id);
        $post ->post_title = $request->input('title');
        $post ->post_category = $request->input('category');
        $post ->post_body = $request->input('body');
        $post ->save();


        return redirect('posts.index')->with('success','Post Updated');

    }

    public function destroy($id){
        $post = Post::where('post_id','=',$id);
        $post->delete();

        return redirect('posts.index')->with('success','Post Deleted');
    }
}
