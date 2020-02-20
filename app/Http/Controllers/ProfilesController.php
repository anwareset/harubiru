<?php

namespace App\Http\Controllers;

use App\User;
use App\Sites;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $users = User::findorfail(Auth::user()->id);
        $sites = Sites::first();
        return view('admin.profiles.index', compact('users', 'sites'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email'
        ]);

        if ($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'password' => bcrypt($request->password)
            ];
        } else {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email
            ];
        }
        User::whereId($id)->update($user_data);
        return redirect()->route('profiles.index')->with('status', 'User Data Updated!');
    }

}
