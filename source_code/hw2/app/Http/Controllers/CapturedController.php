<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\User;
use App\Pokemon;
use App\Captured;

class CapturedController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
	public function index($uid)
	{
		$user_name = User::find($uid);
		return view('captured.index', compact('user_name'));
	}

    public function show($id)
    {
	return CapturedController::index($id);
    }

    public function store(Request $request)
    {
	$uid = $request->input('uid');
	$pid = $request->input('pid');
	if ($uid && $pid)
	{
	try{
		$record = 
			Captured::where('user_id', $uid)
				->where('pokemon_id', $pid)
				->delete();
		$request->session()->flash('success', 'Pokemon successfully dropped!');		
	}
	catch (\Illuminate\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Error while dropping pokemon!');		
	}
	}
	return view('home');
    }
}
