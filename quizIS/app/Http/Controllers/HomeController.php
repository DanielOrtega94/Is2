<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use App\Question;
use App\Result;
use App\Test;
use App\User;
use App\Empresa;
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
$id = Auth::user()->getId();
$questions = Question::count();
$users = User::where('role_id','<>','1')->count();
$quizzes = Test::where('user_id','<>','1')->count();
$nota=Empresa::avg('nota');



$idea = DB::table('empresas')->where('etapa', '=', '1')->where('deleted_at','=',NULL)->count();
$semilla = DB::table('empresas')->where('etapa', '=', '2')->where('deleted_at','=',NULL)->count();
$temprana = DB::table('empresas')->where('etapa', '=', '3')->where('deleted_at','=',NULL)->count();
$expansion = DB::table('empresas')->where('etapa', '=', '4')->where('deleted_at','=',NULL)->count();
$internacionalizacion = DB::table('empresas')->where('etapa', '=', '5')->where('deleted_at','=',NULL)->count();
$retorno = DB::table('empresas')->where('etapa', '=', '6')->where('deleted_at','=',NULL)->count();



$empresas = DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->get();
$nota_empresa = $empresas->pluck('nota');

$test = DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->pluck('test');
$etapas=DB::table('empresas')->where('user_id', '=',$id)->where('deleted_at','=',NULL)->pluck('etapa');
$etapa_empresa = DB::table('etapas')->where('id','=',$etapas[0])->pluck('Nombre');








return view('home', compact('questions', 'users', 'quizzes', 'average','idea','semilla','expansion','temprana','retorno','internacionalizacion','usuario','etapas','empresas','test','nota','nota_empresa','etapa_empresa'));
}
}