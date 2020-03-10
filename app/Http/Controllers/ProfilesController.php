<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfilesController extends Controller
{
    public function index()
    {
        $users = User::findorfail(Auth::user()->id);
        return view('admin.profiles.index', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'avatar' => 'image|mimes:jpeg,png,jpg',
            'email' => 'required|email',
            'bio' => 'required|min:15|max:150'
        ]);

        if ($request->input('password')) {
            if ($request->has('avatar')) {
                $tmp_avatar =  time().$request->avatar->getClientOriginalName();
                $request->avatar->move(public_path('upload/img/avatar/'), $tmp_avatar);
                $user_data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => bcrypt($request->password),
                    'bio' => $request->bio,
                    'avatar' => 'upload/img/avatar/'.$tmp_avatar
                ];
            } else {
                $user_data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'bio' => $request->bio,
                    'password' => bcrypt($request->password)
                ];
            }
        } else {
            if ($request->has('avatar')) {
                $tmp_avatar =  time().$request->avatar->getClientOriginalName();
                $request->avatar->move(public_path('upload/img/avatar/'), $tmp_avatar);
                $user_data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'bio' => $request->bio,
                    'avatar' => 'upload/img/avatar/'.$tmp_avatar
                ];
            } else {
                $user_data = [
                    'name' => $request->name,
                    'email' => $request->email,
                    'bio' => $request->bio
                ];
            }
        }
        User::whereId($id)->update($user_data);
        return redirect()->route('webmanager.profiles.index')->with('status', 'Profile Updated!');
    }

}
