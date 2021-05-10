<?php

namespace App\Http\Controllers;

use App\Models\UserJob;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        $users = UserJob::all();
        return view('user.index', [
            'users' => $users
        ]);
    }

    public function create()
    {
        return view('user.create');
    }

    public function store(Request $request)
    {
        $user = UserJob::create($request->input());
        if ($user) {
            return redirect('/users');
        }
    }

    public function edit($user_id)
    {
        $user = UserJob::findOrFail($user_id);
        return view('user.edit', [
            'user' => $user
        ]);
    }

    public function update($user_id, Request $request)
    {
        $user = UserJob::findOrFail($user_id)->update($request->input());
        if ($user) {
            return redirect('/users');
        }
    }

    public function destroy($user_id)
    {
        $user = UserJob::destroy($user_id);
        if ($user) {
            return redirect('/users');
        }
    }

    public function show($user_id)
    {
        $user = UserJob::findOrFail($user_id);
        if ($user) {
            return view('user.show', [
                'user' => $user
            ]);
        }
    }
}
