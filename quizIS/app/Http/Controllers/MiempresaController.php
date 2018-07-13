<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresa;
use App\Etapa;
use Auth;
use DB;
use App\Http\Requests\StoreEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;

class MiempresaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

         
        $id = Auth::user()->getId();
       
         $empresas = DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->get();
         $etapas=DB::table('empresas')->where('user_id', '=',$id)->where('deleted_at','=',NULL)->pluck('etapa');
          $c_etapas=count(DB::table('empresas')->where('user_id', '=',$id)->where('deleted_at','=',NULL)->pluck('etapa'));

        if($c_etapas) {
        $etapa=DB::table('etapas')->where('id','=',$etapas[0])->pluck('Nombre');
       // $etapa=Etapa::where('id',$etapas[0])->select('Nombre')->get();
        }
        else{

        $etapa=["Vacio",""];
        }

        return view('miempresa.index',compact('empresas','etapa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // 
        $id = Auth::user()->getId();
        return view('miempresa.create',compact('id'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->all();
     
       
        $data['user_id']=Auth::user()->getId();

        
      Empresa::create($data);

        return redirect()->route('miempresa.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $empresa = Empresa::findOrFail($id);
        return view('miempresa.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         
        $empresas = Empresa::findOrFail($id);
         
        #$etapas = etapa::findOrFail($Nombre);

        return view('miempresa.edit', compact('empresas'));
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
        $etapas = empresa::findOrFail($id);
        $etapas->update($request->all());

        return redirect()->route('miempresa.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($Nombre)
    {
         $etapas = Empresa::findOrFail($Nombre);
         $etapas -> delete();

        return redirect()->route('miempresa.index');
    }
}
