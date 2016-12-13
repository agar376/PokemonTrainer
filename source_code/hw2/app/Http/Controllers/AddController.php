<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Validator;
use App\Http\Controllers\Controller;
use App\Pokemon;

class AddController extends Controller
{
    //
	public function index()
	{
		return view('add.index');
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
            'name' => 'required|max:255',
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
        return Pokemon::create([
            'name' => $data['name'],
        ]);
    }

    public function store(Request $request)
    {
	$pid = $request->input('pid');
	if ($pid)
	{
		$pokemon = Pokemon::find($pid);
		$pokemon->name = $request->input('name');
try
{		$pokemon->save();
		$request->session()->flash('success', 'Pokemon succesfully updated!');		
}
	catch (\Illuminate\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Error while updating pokemon');		
	}
		return view('home');
	}
try{
	$valid = AddController::create(['name' => strtolower($request->input('name'))]);
		$request->session()->flash('success', 'Pokemon successfully added to the system!');		
}
	catch (\Illuminate\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Pokemon already exists in the system!');		
	}
	
	return view('home');
    }

    public function show($id)
    {
	$pokemon = Pokemon::find($id);
	return view('add.index', compact('pokemon'));
    }

    public function delete($id, Request $request)
    {
	$pokemon_id = Pokemon::find($id);
try{	
	$pokemon_id->delete();
		$request->session()->flash('success', 'Poekon successfully deleted from the system!');		
}
	catch (\Illuminati\Database\QueryException $err) {
		$request->session()->flash('db_error', 'Error while deleting pokemon!');		
	}
	
$pokemon = Pokemon::all();
	return view('pokemon.index', compact('pokemon'));
    }

}
