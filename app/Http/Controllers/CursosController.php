<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Curso;
use Auth;
use DB;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::paginate(5);
        return view('curs.index')->with('cursos', $cursos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        return view('curs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $banner = DB::table('cursos')->max('idCurs');
        if(is_null($banner)){
            $banner = 'banner3.png';
        } else {
            if($banner%3 == 0){
                $banner = 'banner3.png'; 
            } else {
                $banner = 'banner'.($banner%3).'.png';
            }
        }
        $id = Auth::user()->idUsuari;
        $curs = Curso::create(array_merge($request->all(), ['Banner' => $banner]));
        DB::table('professor_imparteixes')->insert(['idCurs' => $curs->idCurs, 'idUsuari' => $id]);

        return redirect('curs/create');   // <----------------------------- RUTA PROVISIONAL, EN REALITAT HA DE REDIRECCIONAR AL SHOW DEL CURS
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $curs = Curso::find($id);
        $id = Auth::user()->idUsuari;

        $url = DB::table('alumne_inscrits')->where('idCurs', $curs->idCurs)->where('idUsuari', $id)->get();

        if($url->isEmpty()){

            $url = DB::table('professor_imparteixes')->where('idCurs', $curs->idCurs)->where('idUsuari', $id)->get();

            if($url->isEmpty()){
                $url = 'curs.show_info';            /* Mostrar vista per usuàri NO-ALUMNE/NO-PROFESSOR del curs */
            } else {
                $url = 'curs.show_admin';           /* Mostrar vista per usuàri PROFESSOR del curs */
            }
        } else {
            $url = 'curs.show';                     /* Mostrar vista per usuàri ALUMNE del curs */
        }

        return view($url)->with('curs', $curs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
