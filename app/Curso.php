<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $fillable = ['NomCurs','NomLlenguatge', 'nomTipus','Nivell','Preu','Idioma','Banner'];

    protected $primaryKey = 'idCurs';

    public function alumneinscrit() {
    	return $this->hasMany('App\AlumneInscrit');
    }

    public function professorimparteix() {
    	return $this->hasMany('App\ProfessorImparteix');
    }
}
