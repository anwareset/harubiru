<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index()
    {
        $users =  User::paginate();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email',
            'level' => 'required',
            'password' => 'required'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'level' => $request->level,
            'password' => bcrypt($request->password),
            'bio' => 'Ini adalah bio dari '.$request->name,
            'avatar' => 'assets/img/avatar/avatar-1.png'
        ]);

        return redirect()->back()->with('success', 'New User Saved!');
    }

    public function edit($id)
    {
        $users = User::findorfail($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email',
            'level' => 'required'
        ]);

        if ($request->input('password')) {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level,
                'password' => bcrypt($request->password)
            ];
        } else {
            $user_data = [
                'name' => $request->name,
                'email' => $request->email,
                'level' => $request->level
            ];
        }
        User::whereId($id)->update($user_data);
        return redirect()->route('webmanager.users.index')->with('status', 'User Data Updated!');
    }

    public function destroy($id)
    {
        $user = User::findorfail($id);
        $user->delete();
        return redirect()->route('webmanager.users.index')->with('status', 'User Deleted!');
    }
}