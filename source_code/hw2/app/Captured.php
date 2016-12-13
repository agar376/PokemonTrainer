<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Captured extends Model
{
    //
	public function user(){
		return $this->belongsTo(App\User);
	}

	protected $fillable = array('user_id', 'pokemon_id');
	protected $table = "captured";

	public function pokemon(){
		return $this->belongsTo(App\Pokemon);
	}

}
