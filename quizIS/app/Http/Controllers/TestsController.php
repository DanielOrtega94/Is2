<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use App\Test;
use App\TestAnswer;
use App\Topic;
use App\Etapa;
use App\Question;
use App\Empresa;
use App\QuestionsOption;
use Illuminate\Http\Request;
use App\Http\Requests\SelectEtapaRequest;
use App\Http\Requests\StoreTestRequest;

class TestsController extends Controller
{


    /**
     * Display a new test.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         
      $etapas = Etapa::all();
      $id = Auth::user()->getId();
      $test=count(DB::table('empresas')->where('user_id', '=', $id)->where('deleted_at','=',NULL)->where('test',1)->select('test')->get());  

//      $empresa = Empresa::whereNull('deleted_at')->where('user_id','=',$id)->get();
      $empresa = Empresa::whereNull("deleted_at")->where('user_id',$id)->get();
      $questions =  DB::table('questions')->where('inicial','=',1)->get();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }


    return view('tests.index', compact('etapas','questions','empresa','id','test'));
       
    }


    public function create()
    {
    
    }

    /*public function select2()
    {

      $id = $request->id;
      $questions = DB::table('questions')->where('topic_id', '=', $id)->get();
      foreach ($questions as $question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        /*
        // $topics = Topic::inRandomOrder()->limit(10)->get();


        $questions = Question::all();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        
        foreach ($topics as $topic) {
            if ($topic->questions->count()) {
                $questions[$topic->id]['topic'] = $topic->title;
                $questions[$topic->id]['questions'] = $topic->questions()->inRandomOrder()->first()->load('options')->toArray();
                shuffle($questions[$topic->id]['questions']['options']);
            }
        }
            return view('tests.index', compact('questions'));
         
   return view('tests.select2',compact('questions'));

    }*/

    public function select($id){

      $user = Auth::user()->getId();
      $questions = DB::table('questions')->where('etapa_id','=',$id)->get();
       foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }
       
        $empresa =DB::table('empresas')->whereNull('deleted_at')->where('user_id','=',$user);
        $empresa->update(['etapa'=>$id]);
           
    return view('tests.select', compact('dimensiones','empresa','questions'));
    }   

    /**
     * Store a newly solved Test in storage with results.
     *
     * @param  \App\Http\Requests\StoreResultsRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(Request $request)
    {
        $result = 0;


        $empresa = DB::table('empresas')->where('user_id','=',Auth::id())->pluck('id');

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        $puntaje_maximo = 0; 
        $etapa = DB::table('empresas')->whereNull('deleted_at')->where('user_id','=',Auth::id())->select('etapa')->pluck('etapa');
        $questions  = DB::table('questions')->where('etapa_id','=',$etapa[0])->get();
        foreach ($questions as $q) {
            $puntaje_max = DB::table('questions_options')->where('question_id','=',$q->id)->select(DB::raw('max(puntaje) as puntaje'))->pluck('puntaje');
            $puntaje_maximo += $puntaje_max[0];
        }
        //$total_ponderaciones=DB::table('questions')->where('')->sum('ponderation');
        //$ponderacion_por_pregunta= DB::table('questions')->select('id','ponderation')->groupBy('id');
        //$saco_ponderaciones = DB::table('questions_options')
    //->select('question_id', DB::raw('max(puntaje) as puntaje'))
    //->groupBy('question_id')
    //->get();

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->puntaje
            ) {
                $status = 1;
                $result+= QuestionsOption::find($request->input('answers.'.$question))->puntaje;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $result = ($result*7)/$puntaje_maximo;
        $final = round( $result, 1, PHP_ROUND_HALF_UP);

        $test->update(['result' => $final]);
        $empresa = DB::table('empresas')->whereNull('deleted_at')->where('user_id','=',Auth::id())->update(['test'=>1 , 'nota' => $final]);

        return redirect()->route('results.show', [$test->id]);
    }

    /**
     * Update Question in storage.
     *
     * @param  \App\Http\Requests\UpdateQuestionsRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQuestionsRequest $request, $id)
    {
        $question = Question::findOrFail($id);
        $question->update($request->all());

        return redirect()->route('questions.index');
    }


    /**
     * Display Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('questions.show', compact('question') + $relations);
    }


    /**
     * Remove Question from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('questions.index');
    }

    /**
     * Delete all selected Question at once.
     *
     * @param Request $request
     */
    public function massDestroy(Request $request)
    {
        if ($request->input('ids')) {
            $entries = Question::whereIn('id', $request->input('ids'))->get();

            foreach ($entries as $entry) {
                $entry->delete();
            }
        }
    }
}
