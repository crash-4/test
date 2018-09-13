<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Session;
class PostsController extends Controller
{
    //
    public function addPost(request $request)
    {


        // ВАЛИДАЦИЯ
        $request->validate([
            'title' => 'required|string|max:5'
        ]);



        $post=new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->user_id=Session::get('users');
        $post->user_name=User::find(Session::get('users'))->userName;
        $post->email=User::find(Session::get('users'))->email;
       // $post->email=Auth::User()->email;
       // $post->user_id=Auth::get()->pluck('user_id');
        $post->save();
        
        return redirect()->back();
        // $posts = Post::all();
        // return view('posts',['mPost'=>$posts]);
        
       
    }
    public function posts()
    {
        //$posts = Post::where('user_id','=',Session::get('posts'));
        //
        $posts = Post::where('user_id',Session::get('users'))->get();

        return view('posts',['mPost'=>$posts]);
    }

    public function updatePost(Request $request)
    {
        //$tPosts = Auth::all();
        
        $post = Post::find($request->id);
        $post->title = $request->title;
        $post->text=$request->text;
        //$post->user_name='newNames';
        $post->save();
        //$test = Auth()->User()->id;
        //$tPosts->dd()
        //return view('test',['updatePost'=>$post]);
        return redirect()->route('posts');
    }
    public function editPost($id)
    {
        $post = Post::find($id);
        return view('edit-post', ['post'=>$post]);
    }
    
    public function deletePost($id)
    {
        $post = Post::destroy($id);
        return redirect()->back();
    }

    public function getPost($userId)
    {
        $users=User::all();

        // foreach($users as $user)
        // {
        //     $posts = Post::where('user_id',$user->id)->get();
        //     dump($posts);
        // }
       // $posts = Post::where('user_id',$userId)->get();

       
        // $post = Post::destroy($id);
        // return redirect()->back();
        foreach($users as $user)
        {
            dump($user->posts);
        }
    }


        public function getPostById($id)
    {
        $post=Post::find($id);
        dump($post);
        dump($post->user->userName);
    }



}
