<?php

//Route::get('usuari/{id}', function($id){ /* ------------------------ Des del redireccionament del POST s'agafa a aquesta ruta que mostrarà el perfil de l'usuari creat */
//    $cursos = App\Curso::all();
//    return view('usuaris.home')->with('cursos', $cursos); /* ------- Carreguem la vista home del nou usuari i hi mostrem els cursos disponibles */
//});

/* Update usuari */

//Route::get('usuari/perfil/{id}', function($id){
//    $usuari = App\Usuari::find($id); /* ---------------------------- Amb busquem l'array $usuari amb el seu id que se'ns ha passat pel GET */
//    return view('usuaris.perfil')->with('usuari', $usuari); /* ----- Carreguem la vista perfil i li passem l'array amb la info de l'usuàri creat */
//});

//Route::put('usuari/{id}', function($id){ /* ------------------------ Per a updatejar les dades d'un usuari (configuració del perfil d'usuari) cridem al mètode PUT des de l'action del formulari de usuaris/perfil.blade.php */
//    $usuari = App\Usuari::find($id)->update(Request::all()); /* ---- Li passem amb el Request totes les dades del formulari que correspon a la configuració del perfil */
//    return redirect('usuari/perfil/'.$usuari->id); /* -------------- Redireccionem de nou a la vista perfil del l'usuari modificat (especificada a sobre) */
//});*/

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuaris = User::all();
        return view('usuari.index')->with('usuaris', $usuaris);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuari.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $usuari = User::create($request->all());
        return redirect('usuari/'.$usuari->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $usuari = User::find($id);
        return view('usuari.show')->with('usuari', $usuari);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $usuari = User::find($id);
        return view('usuari.edit')->with('usuari', $usuari);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        if ($request->hasFile('Imatge')) {

            $request->file('Imatge')->store('public/images/profile');
            $usuari = User::find($id);
            $usuari->Imatge = $request->file('Imatge')->hashName();
            $usuari->update($request->all());

        } else {

            $usuari = User::find($id)->update($request->all());

        }

        return redirect('usuari/'.$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        /* De moment no contemplem que els usuaris puguin esborrar el seu compte, tant sols donar-se de baixa. */
    }


}
