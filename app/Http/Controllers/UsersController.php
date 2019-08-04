<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\User;

class UsersController extends Controller
{
    public function index() {

        $users = \App\User::all();
        return view('users.index', compact('users'));
    }

    public function create() {
        return view('users.create');
    }

    public function store() {
        // $user = new User();
        // $user->username = request('username');
        // $user->password = request('password');
        // $user->email = request('email');
        // $user->isPaid = 0;
        // $user->save();
        // OR
        User::create([
            'username' => request('username'),
            'password' => request('password'),
            'email' => request('email'),
            'isPaid' => 0
        ]);
        return redirect('/users');
    }

    public function edit(User $user) { 
        // $user = User::findOrFail($id);
        return view('users.edit', compact('user'));
    }

    public function update(User $user) {
        $user->update(request(['email']));
        return redirect('/users');
    }

    public function destroy(User $user) {
        $user->delete();
        return redirect('/users');
    }

    public function show(User $user) {
        return view('users.show', compact('user'));
    }

}
