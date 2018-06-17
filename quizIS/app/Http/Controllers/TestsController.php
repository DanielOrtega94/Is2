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
       $empresa = Empresa::findOrFail($id);


       $questions = Question::all();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->inRandomOrder()->get();
        }

    return view('tests.index', compact('etapas','empresa'));
       
    }


 public function create()
    {
    
    }

    public function select($id)
    {


      
      $questions = Question::findOrFail($id);
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        /*
        // $topics = Topic::inRandomOrder()->limit(10)->get();


        $questions = Question::all();
        foreach ($questions as &$question) {
            $question->options = QuestionsOption::where('question_id', $question->id)->get();
        }

        /*
        foreach ($topics as $topic) {
            if ($topic->questions->count()) {
                $questions[$topic->id]['topic'] = $topic->title;
                $questions[$topic->id]['questions'] = $topic->questions()->inRandomOrder()->first()->load('options')->toArray();
                shuffle($questions[$topic->id]['questions']['options']);
            }
        }
            return view('tests.index', compact('questions'));
         */
   return view('tests.index',compact('questions'));

    }

    public function edit($id){

       $dimensiones = DB::table('topics')->where('idetapa', '=', $id)->get();
        $user = Auth::user()->getId();
       $empresa = Empresa::findOrFail($user);

    return view('tests.edit', compact('dimensiones','empresa'));


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

        $test = Test::create([
            'user_id' => Auth::id(),
            'result'  => $result,
        ]);

        foreach ($request->input('questions', []) as $key => $question) {
            $status = 0;

            if ($request->input('answers.'.$question) != null
                && QuestionsOption::find($request->input('answers.'.$question))->correct
            ) {
                $status = 1;
                $result++;
            }
            TestAnswer::create([
                'user_id'     => Auth::id(),
                'test_id'     => $test->id,
                'question_id' => $question,
                'option_id'   => $request->input('answers.'.$question),
                'correct'     => $status,
            ]);
        }

        $test->update(['result' => $result]);

        return redirect()->route('results.show', [$test->id]);
    }
}
