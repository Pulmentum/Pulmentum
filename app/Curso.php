<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    //
    protected $fillable = ['nomcurs','nomllenguatge','nivell','preu'];

    public function alumneinscrit() {
    	return $this->hasMany('App\AlumneInscrit');
    }

    public function professorimparteix() {
    	return $this->hasMany('App\ProfessorImparteix');
    }
}