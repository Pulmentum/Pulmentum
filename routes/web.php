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
    return view('welcome');
});/*
Route::get('/', function () {
    return view('index');
});*/


/* ___________________________________________________________________ USUARI __________________________________________________________________________ */


Route::get('registrar', function(){ /* ----------------------------- Formulari de registre */
	return view('usuaris.registrar');
});

/* Create usuari */

Route::post('usuari', function(){ /* ------------------------------- Url definida al action del form per a registrar-se */
	$usuari = App\Usuari::create(Request::all()); /* --------------- $usuari és una array del POST que es fa al fer el submit del form, i que conté les dades d'aquest */
	return redirect('usuari/'.$usuari->id); /* --------------------- Redirecció/{id} que torna al routes amb l'id de l'usuari creat */
});											/*  >>> >>> >>> >>> >>>  aquí la idea seria que et redireccionés a un home amb l'usuari ja loguejat */

Route::get('usuari/{id}', function($id){ /* ------------------------ Des del redireccionament del POST s'agafa a aquesta ruta que mostrarà el perfil de l'usuari creat */
	$cursos = App\Curso::all();
	return view('usuaris.home')->with('cursos', $cursos); /* ------- Carreguem la vista home del nou usuari i hi mostrem els cursos disponibles */
});

/* Update usuari */

Route::get('usuari/perfil/{id}', function($id){
	$usuari = App\Usuari::find($id); /* ---------------------------- Amb busquem l'array $usuari amb el seu id que se'ns ha passat pel GET */
	return view('usuaris.perfil')->with('usuari', $usuari); /* ----- Carreguem la vista perfil i li passem l'array amb la info de l'usuàri creat */
});

Route::put('usuari/{id}', function($id){ /* ------------------------ Per a updatejar les dades d'un usuari (configuració del perfil d'usuari) cridem al mètode PUT des de l'action del formulari de usuaris/perfil.blade.php */
	$usuari = App\Usuari::find($id)->update(Request::all()); /* ---- Li passem amb el Request totes les dades del formulari que correspon a la configuració del perfil */
	return redirect('usuari/perfil/'.$usuari->id); /* -------------- Redireccionem de nou a la vista perfil del l'usuari modificat (especificada a sobre) */
});

/* Delete usuari */

/* De moment no contemplem que un usuari es pugui esborrar de la base de dades al donar-se de baixa */


/* ______________________________________________________________________ CURS ___________________________________________________________________________ */


Route::get('curs/crear', function(){ /* ----------------------------- Formulari de creació de curs */
	return view('cursos.create');
});

/* Create curs */

Route::post('curs', function(){ /* --------------------------------- Url definida al action del form per a crear curs */
	$curs = App\Curso::create(Request::all()); /* ------------------ $curs és una array del POST que es fa al fer el submit del form, i que conté les dades d'aquest */
	return redirect('curs/'.$curs->id); /* ------------------------- Redirecció/{id} que torna al routes amb l'id del curs creat */
});											/*  >>> >>> >>> >>> >>>  Aquí la idea seria que et redireccionés al curs creat per a poder detallar-lo */

Route::get('curs/{id}', function($id){ /* -------------------------- Des del redireccionament del POST s'agafa a aquesta ruta que mostrarà el perfil de l'usuari creat */
	$curs = App\Curso::find($id); /* ------------------------------- Guardo a l'array $curs la informació del curs amb la id passada pel GET */
	$alumnesCurs = $curs->alumneinscrit()->pluck('alumnes', 'idAlumne'); /* Guardo a l'array $alumnesCurs tots els registres idAlumne de AlumneInscrit amb idCurs = $curs->id (agafat a sobre) */
	return view('cursos.curs')->with('alumnesCurs', $alumnesCurs); /* --- Carreguem la vista perfil del curs i li passem l'array amb la info dels alumnes que té */
});

/* Update curs */

Route::get('curs/perfil/{id}', function($id){
	$curs = App\Curso::find($id); /* ------------------------------- Amb busquem l'array $curs amb el seu id que se'ns ha passat pel GET */
	$alumnes = App\AlumneInscrit::all()->pluck('Alumnes', 'Nom'); /* Busquem el total de alumnes inscrits guardant-los en una array, id->nom, per després carregar-los a la vista del perfil 																  del curs en qüestió */
								  			/*  >>> >>> >>> >>> >>>  Aquí la idea seria des de la vist de modificació del curs es pogués també fer fora/gestionar l'adhesió/permisos dels 							 alumnes en el curs en qüestió */
	return view('cursos.perfil')->with('curs', $curs); /* ---------- Carreguem la vista perfil del curs (modificar) i li passem l'array amb la info del curs en qüestió */
});

Route::put('curs/{id}', function($id){ /* -------------------------- Per a updatejar les dades d'un curs (configuració del perfil del curs) cridem al mètode PUT des de l'action del formulari 																		de cursos/perfil.blade.php */
	$curs = App\Curso::find($id)->update(Request::all()); /* ------- Li passem amb el Request totes les dades del formulari que correspon a la configuració del perfil */
	return redirect('curs/perfil/'.$curs->id); /* ------------------ Redireccionem de nou a la vista perfil del curs modificat (especificada a sobre) */
});

/* Delete curs */


/* _____________________________________________________________________ INFORMACIO __________________________________________________________________________ */


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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
