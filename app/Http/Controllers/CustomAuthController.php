<?php

namespace App\Http\Controllers;
// add this to show function of first user in database
use App\User;
use Illuminate\Support\Facades\Auth;
////////
use Illuminate\Http\Request;

class CustomAuthController extends Controller
{
   public function login(){
    // to show first user in database
$user=User::first();
Auth::login($user);
return redirect('/services');
   }

   public function Customlogin($id){
    // to show  user by id 2 in database
//$user=User::find(2);
//Auth::login($user);
//return redirect('/services');

//or show any user by id in database
//$user=User::find($id);
//if condition in case of no more user id shows
//if(! $user)
//{
//Auth::logout();
//return redirect('login');
//}
//Auth::login($user);
//return redirect('/services');
// another way 
$user=User::findorFail($id);
Auth::login($user);
return redirect('/services');
}

}
