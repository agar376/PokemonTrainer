<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;

class UserController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index()
	{
		$user = User::all();
		return view('user.index', compact('user'));
	}

    public function show($id)
    {
	$user = User::find($id);
	return view('user.update', compact('user'));
    }

    public function store(Request $request)
    {
	$uid = $request->input('uid');
	if ($uid)
	{
		try {
		$user = User::find($uid);
		$user->name = $request->input('name');
		$user->email = $request->input('email');
		$user->hometown = $request->input('hometown');
		$user->save();
		$request->session()->flash('success', 'User Profile updated!');		
		}
	catch (\Illuminate\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Error while updating user profile!');		
	}

	}
	return UserController::index();
    }
}
