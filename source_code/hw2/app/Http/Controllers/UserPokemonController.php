<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\Captured;
use App\Pokemon;
use App\User;
use Illuminate\Database\QueryException;

class UserPokemonController extends Controller
{
    //
	public function index()
	{
		$pokemon = Pokemon::orderBy('name', 'asc')->get();
		return view('userpokemon.index', compact('pokemon'));
	}


    protected $redirectTo = 'home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'user_id' => 'required',
            'pokemon_id' => 'required',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return Pokemon
     */
    protected function create(array $data)
    {
        return Captured::create([
            'user_id' => $data['user_id'],
            'pokemon_id' => $data['pokemon_id'],
        ]);
    }

    public function store(Request $request)
    {
	try {
	$valid = UserPokemonController::create(['user_id' => Auth::user()->id, 'pokemon_id' => $request->input('pokemon_id')]);
		$request->session()->flash('success', 'Pokemon added to this user!');		
	}
	catch (\Illuminate\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Pokemon already exists for this user');		
	}
	$user = User::all();	
	return view('user.index', compact('user'));
    }

}
