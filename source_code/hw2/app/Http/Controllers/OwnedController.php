<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\User;
use App\Pokemon;

class OwnedController extends Controller
{
    //
	public function index($uid)
	{
		$pokemon_name = Pokemon::find($uid);
		return view('owned.index', compact('pokemon_name'));
	}
}
