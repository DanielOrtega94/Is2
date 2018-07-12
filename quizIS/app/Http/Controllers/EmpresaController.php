<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use DB;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class EmpresaController extends Controller
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
        $empresas = Empresa::all();
         foreach ($empresas as $empresa) {
            $etapa=$empresa['etapa'];
            $empresa['etapa']= DB::table('etapas')->where('id','=',$etapa)->select('Nombre')->get()->pluck('Nombre');
         }

        return view('empresas.index', compact('empresas'));
    }
     /**
     * Show the form for creating new etapa.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

	    $relations = [
            'usuarios' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
        ];	
       

      return view('empresas.create',$relations);
    }
    /**
     * Store a newly created etapa in storage.
     *
     * @param  \App\Http\Requests\StoreetapasRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmpresaRequest $request)
    {
        Empresa::create($request->all());

        return redirect()->route('empresas.index');
    }


    /**
     * Show the form for editing etapa.
     *

     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($Nombre)
    {
           $relations = [ 
        'empresas' => Empresa::findOrFail($Nombre),
         'usuarios' => \App\User::get()->pluck('name', 'id')->prepend('Please select', ''),
           ];   
        #$etapas = etapa::findOrFail($Nombre);

        return view('empresas.edit', $relations);
    }

    /**
     * Update etapa in storage.
     *
     * @param  \App\Http\Requests\UpdateetapasRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmpresaRequest $request, $Nombre)
    {
        $etapas = empresa::findOrFail($Nombre);
        $etapas->update($request->all());

        return redirect()->route('empresas.index');
    }


    /**
     * Display etapa.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($Nombre)
    {
        $empresa = Empresa::findOrFail($Nombre);
         $etapa=$empresa['etapa'];
            $empresa['etapa']= DB::table('etapas')->where('id','=',$etapa)->select('Nombre')->get()->pluck('Nombre');

        return view('empresas.show', compact('empresa'));
    }


    /**
     * Remove etapa from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nombre)
    {
        //$etapas = Empresa::findOrFail($Nombre);
        //$etapas -> delete();
        $etapas=DB::table('empresas')->where('id','=',$Nombre)->delete();

        return redirect()->route('empresas.index');
    }

    /**
     * Delete all selected etapa at once.
     *
     * @param Request $request
     */
   public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Topic::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }



    
}
