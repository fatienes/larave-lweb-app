<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class registeraddController extends Controller
{
    public function registeradd()
    {
        $roles = Role::all();
        return view ('front.registeradd', compact('roles'));
    }
 
    public function registeraddPost(Request $request)
    {
        $user = new User();
 
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
 
        $user->syncRoles($request->role);
        $user->save();

        
        return back()->with('success', 'User Add successfully');
    }
}
