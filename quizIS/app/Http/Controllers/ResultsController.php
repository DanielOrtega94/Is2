<?php

namespace App\Http\Controllers;

use Auth;
use DB;
use App\Test;
use App\TestAnswer;
use Illuminate\Http\Request;
use App\Http\Requests\StoreResultsRequest;
use App\Http\Requests\UpdateResultsRequest;

class ResultsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin')->except('index', 'show');
    }

    /**
     * Display a listing of Result.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $results = Test::all()->load('user');

        if (!Auth::user()->isAdmin()) {
            $results = $results->where('user_id', '=', Auth::id());
        }
        $id = Auth::user()->getId();
        $empresas = DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->get();
        $nota=DB::table('empresas')->where('user_id', '=',$id)->pluck('nota');
        $etapas=DB::table('empresas')->where('user_id', '=',$id)->select('etapa')->get();
        $etapa=DB::table('etapas')->where('id','=',$id)->pluck('Nombre');
        return view('results.index', compact('results','id','empresas','etapa','nota'));
    }

    /**
     * Display Result.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $test = Test::find($id)->load('user');

        if ($test) {
            $results = TestAnswer::where('test_id', $id)
                ->with('question')
                ->with('question.options')
                ->get()
            ;
        }

        return view('results.show', compact('test', 'results'));
    }
}
