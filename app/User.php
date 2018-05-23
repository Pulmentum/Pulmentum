<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email','Cognoms','DataNaixement','PaisResidencia', 'password'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token',];

    protected $primaryKey = 'idUsuari';

    public function dadabancaria() {
        return $this->belongsTo('App\DadaBancaria');
    }

    public function professorimparteix() {
        return $this->hasMany('App\ProfessorImparteix');
    }

    function socialProviders()
    {
        return $this->hasMany(SocialProvider::class);
    }
}
