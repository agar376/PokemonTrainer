<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\Pokemon;
use Illuminate\Support\Facades\Auth;

class PokemonController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

	public function index(Request $request)
	{
		if (Auth::user()->is_admin == 0)
		{
			$request->session()->flash('adminerror', 'Access denied! Only admins allowed');
		}
		$pokemon = Pokemon::all();
		return view('pokemon.index', compact('pokemon'));
	}

	public function search(Request $request)
    {
	$request->session()->forget('status');
	$pname = $request->input('pname');
	if ($pname)
	{
		$pokemon = Pokemon::where('name', 'LIKE', '%' . $pname . '%')->get();
		if ($pokemon->count() < 1)
		{ $request->session()->flash('status', 'No pokemon with name ' . $pname . ' found!'); }
		return view('pokemon.index', compact('pokemon'));
	}
	$request->session()->flash('status', 'Search string empty');
	return PokemonController::searchPokemon();
    }

    public function searchPokemon()
    {
	return view('search.index');
    }
}
