<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function index() {

        $users = \App\User::all();

        return $users;

        return view('users.index', [$users]);
    }
}
