<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadaBancaria extends Model
{
    //
    protected $fillable = ['ntargeta','nomcomplet','datacaducitat','cvv'];

    public function usuari() {
    	return $this->hasOne('App\Usuari');
    }
}