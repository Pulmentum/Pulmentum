
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadaBancaria extends Model
{
    protected $fillable = ['NTargeta','NomComplet','MesCaducitat','AnyCaducitat','CVV'];

    protected $primaryKey = 'NTargeta';

    protected $hidden = ['CVV'];

    public function usuari() {
    	return $this->hasOne('App\User');
    }
}
