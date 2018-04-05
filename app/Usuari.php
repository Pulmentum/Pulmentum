<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuari extends Model
{
    //
    protected $fillable = ['Nom','Cognoms','DataNaixement','Email','PaisResidencia','Idioma'];

    public function dadabancaria() {
    	return $this->belongsTo('App\DadaBancaria');
    }

    public function professorimparteix() {
    	return $this->hasMany('App\ProfessorImparteix');
    }

	public $timestamps = false;
}