<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Session;

class RegistrationController extends Controller
{
    //
    public function regUser(request $request)
    {
        $user=new User();
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->user_id=Auth::User()->id;
        // $user->user_name=Auth::User()->name;
        // $user->email=Auth::User()->email;
       // $post->user_id=Auth::get()->pluck('user_id');
        $user->save();
       // столб, знач

       // $user=User::where('email','=','crash')->first();
        Session::put('users',$user->id);
        return redirect('posts');//->route('posts');
    }

    public function authUser(request $request)
    {
        $user=new User();
       // $user=User::find($request->input('id'));
        

// столб, знач

       // $user=User::where('email','=','crash')->first();
        $user->userName = $request->userName;
        $user->email = $request->email;
        $user->password = $request->password;
        // $user->user_id=Auth::User()->id;
        // $user->user_name=Auth::User()->name;
        // $user->email=Auth::User()->email;
       // $post->user_id=Auth::get()->pluck('user_id');
        $user->save();
        
        return redirect()->back();
    }

    public function logout(request $request)
    {
        session::forget('users');
        return redirect()->back();
    }

   
}
