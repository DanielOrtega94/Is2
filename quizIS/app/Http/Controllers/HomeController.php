<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Question;
use App\Result;
use App\Test;
use App\User;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuario=Auth::user()->isAdmin();
        $id=Auth::user()->select('id');
        $questions = Question::count();
        $users = User::whereNull('role_id')->count();
        $quizzes = Test::count();
        $average = Test::avg('result');
        $idea = DB::table('empresas')->where('etapa', '=', 'Idea')->count();
        $semilla = DB::table('empresas')->where('etapa', '=', 'Semilla')->count();
        $expansion = DB::table('empresas')->where('etapa', '=', 'Temprana')->count();
        $temprana = DB::table('empresas')->where('etapa', '=', 'Expansión')->count();
        $internacionalizacion = DB::table('empresas')->where('etapa', '=', 'Internacionalización')->count(); 
        $empresa= DB::table('empresas')->where('user_id', '=',$id)->where('deleted_at','=',NULL);
# $nota=DB::table('empresas')->where('user_id', '=',$id)->select();
        $etapa=DB::table('empresas')->where('user_id', '=',$id)->select('etapa');





        return view('home', compact('questions', 'users', 'quizzes', 'average','idea','semilla','expansion','temprana','internacionalizacion','usuario','etapa','empresa'));
    }
}
