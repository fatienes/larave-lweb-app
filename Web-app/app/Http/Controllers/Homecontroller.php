<?php

namespace App\Http\Controllers;

use App\Mail\Contactmail;
use Mail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class Homecontroller extends Controller
{
    public function index()
    {
        return view('front.home');
    }
    public function about(){
        return view('front.about');
    }
    public function contact(){
        return view('front.contact');
    }
   public  function admin(){
    $user = User::all();
    return view ('admin.adminpage',compact('user'));
   }
   public  function userlist(){
    $user = User::all();
    return view ('admin.userlist',compact('user'));
   }
   public function learnmore(){
    return view('front.learnmore');
   }
   public function contact_mail_send(Request $request){
      Mail::to('fatihenes727@gmail.com')->send(new Contactmail($request));
      return redirect('contact');
   }
   public function delete($id){
    $user = User::find($id);
    $user->delete();
    
 
    return back()->with('danger', 'Data deleted successfully');
    
   }
   public function edit($id){
    $user = User::find($id);
    return view('admin.edit',compact('user'));
   }
   public function update(Request $request,$id){
    $user = User::find($id);
    $user->name = $request->name;
    $user->email = $request->email;
    
    $user->update();

 
    return back()->with('success', 'Data updated successfully');
   }
}
