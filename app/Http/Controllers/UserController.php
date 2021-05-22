<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('users.index',compact(['users']));
    }

    public function edit($id) {
        $users = User::find($id);
        return view('users.edit',compact(['users']));
    }

    public function update(Request $request,$id) {
        $users = User::find($id);
        $users->update($request->all());
        return redirect('/user');
    }
}
