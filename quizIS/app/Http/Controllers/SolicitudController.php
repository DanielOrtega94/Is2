<?php

namespace App\Http\Controllers;

use App\solicitud;

use Illuminate\Http\Request;



class SolicitudController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

     /**
     * Display a listing of etapa.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $etapas = Etapa::all();

        return view('solicitudes.index', compact('etapas'));
    }
     /**
     * Show the form for creating new etapa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       # $relations = [
        #    'etapas' => \App\etapa::get()->pluck('title', 'id')->prepend('Please select', ''),
        #];

        #$etapa =['Idea' =>'Idea', 
         #                'Semilla' => 'Semilla',
          #               'Etapa Temprana' =>'Etapa Temprana',
           #              'Expansión' =>'Expansión', 
            #             'Internalización' =>'Internalización',
             #            'Retorno/Declive' =>'Retorno/Declive'];

      return view('solicitudes.create');
    }
    /**
     * Store a newly created etapa in storage.
     *
     * @param  \App\Http\Requests\StoreetapasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEtapasRequest $request)
    {
        etapa::create($request->all());

        return redirect()->route('solicitudes.index');
    }


    /**
     * Show the form for editing etapa.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $etapas = etapa::findOrFail($id);
        #$etapas = etapa::findOrFail($Nombre);

        return view('solicitudes.edit', compact('etapas','id'));
    }

    /**
     * Update etapa in storage.
     *
     * @param  \App\Http\Requests\UpdateetapasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEtapasRequest $request, $Nombre)
    {
        $etapas = etapa::findOrFail($Nombre);
        $etapas->update($request->all());

        return redirect()->route('solicitudes.index');
    }


    /**
     * Display etapa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nombre)
    {
        $etapas = etapa::findOrFail($Nombre);

        return view('solicitudes.show', compact('etapas'));
    }


    /**
     * Remove etapa from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nombre)
    {
        $etapas = etapa::findOrFail($Nombre);
        $etapas -> delete();

        return redirect()->route('solicitudes.index');
    }



}
