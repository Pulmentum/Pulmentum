<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('index');
});

/* ________________________________________________________________ USUARI _____________________________________________________________________________ */


Route::get('registrar', function(){ /* ----------------------------- Formulari de registre */
	return view('usuaris.registrar');
});

/* Create usuari */

Route::post('usuari', function(){ /* ------------------------------- Url definida al action del form per a registrar-se */
	$usuari = App\Usuari::create(Request::all()); /* --------------- $usuaris és una array generada del POST que es fa amb el form */
	return redirect('usuari/'.$usuari->id); /* --------------------- Redirecció/{id} que torna al routes amb l'id de l'usuari creat */
});											/*  >>> >>> >>> >>> >>>  aquí la idea seria que et redireccionés a un home amb l'usuari ja loguejat */

Route::get('usuari/{id}', function($id){ /* ------------------------ Des del redireccionament del POST s'agafa a aquesta ruta que mostrarà el perfil de l'usuari creat */
	//$usuari = App\Usuari::find($id); /* ------- NOT WORKING ------ Amb busquem l'array $usuari amb el seu id que se'ns ha passat pel POST */
	return view('usuaris.home');//->with('usuari', $usuari); /* ---- Carreguem la vista perfil i li passem l'array amb la info de l'usuàri creat */
});

/* Update usuari */

Route::get('usuari/perfil/{id}', function($id){
	$usuari = App\Usuari::find($id); /* ---------------------------- Amb busquem l'array $usuari amb el seu id que se'ns ha passat pel GET */
	return view('usuaris.perfil')->with('usuari', $usuari); /* ----- Carreguem la vista perfil i li passem l'array amb la info de l'usuàri creat */
});

Route::put('usuari/{id}', function($id){ /* ------------------------ Per a updatejar les dades d'un usuari (configuració del perfil d'usuari) cridem al mètode PUT */
	$usuari = App\Usuari::find($id)->update(Request::all()); /* ---- Li passem amb el Request totes les dades del formulari que correspon a la configuració del perfil */
	return redirect('usuari/perfil/'.$usuari->id); /* ------------- Redireccionem de nou a la vista perfil del l'usuari modificat (especificada a sobre) */
});

/* Delete usuari */



/* _______________________________________________________________ INFORMACIO __________________________________________________________________________ */


Route::get('informacio', function(){ /* ------------------- */
	return view('informacio.informacio');
});

Route::get('aboutus', function(){ /* ---------------------- */
	return view('informacio.aboutus');
});

Route::get('privacitat', function(){ /* ------------------- */
	return view('informacio.privacitat');
});

Route::get('avislegal', function(){ /* -------------------- */
	return view('informacio.avislegal');
});

Route::get('termes', function(){ /* ----------------------- */
	return view('informacio.termes');
});

Route::get('ajuda', function(){ /* ------------------------ */
	return view('informacio.ajuda');
});




/* ___________________________________________________________________ CURS ___________________________________________________________________________ */


Route::get('curs/{id}', function($id){ /* ----------------- */
	return view('cursos.show');
});

