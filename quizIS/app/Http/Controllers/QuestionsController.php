<?php

namespace App\Http\Controllers;

use App\Question;
use App\QuestionsOption;
use App\Etapa;
use App\Topic;
use DB;
use Illuminate\Http\Request;
use App\Http\Requests\StoreQuestionsRequest;
use App\Http\Requests\SelectQuestionsRequest;
use App\Http\Requests\UpdateQuestionsRequest;
use Validator;
class QuestionsController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    /**
     * Display a listing of Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $questions = Question::all();

        foreach ($questions as $question) {
        $nombre_topico=$question['topic_id'];    
        $nombre_etapa=$question['etapa_id'];
        $question['etapa_id']= DB::table('etapas')->where('id','=',$nombre_etapa)->select('Nombre')->get()->pluck('Nombre');
        $question['topic_id']= DB::table('topics')->select('title')->where('id','=',$nombre_etapa)->get()->pluck('title');
        }

        return view('questions.index', compact('questions'));
    }

    /**
     * Show the form for creating new Question.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $relations = [
            'etapas' => Etapa::get()->pluck('Nombre','Nombre'),
        ];
           

        return view('questions.create',$relations);
    }

        public function select(SelectQuestionsRequest $request){

           #$nombre =  Etapa::where('id',$request->Nombre)->pluck('Nombre','id');
            $relations = [
                'etapas' => Etapa::where("Nombre", $request->Nombre)->get()->pluck('Nombre','Nombre'),
                'topics' => Topic::where('idetapa',$request->Nombre)->get()->pluck('title','id'),
                'etapa' => DB::table('etapas')->where('Nombre','=',$request->Nombre)->select("Nombre")->get(),
            ];

            return view('questions.create2',$relations);
        }   

         /**
     * Store a newly created Question in storage.
     *
     * @param  \App\Http\Requests\StoreQuestionsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreQuestionsRequest $request)
    {

        $rules = [];
        foreach ($request->input('name') as $key => $value) {
            $rules["name.{$key}"] = 'required';
        }

        $validator = Validator::make($request->all(),$rules);

        $etapa = Etapa::where('Nombre',$request->Nombre)->select('id')->get();

        $question = Question::create([
            'topic_id' => $request->topic_id,
            'etapa_id' => $etapa[0]->id,
            'question_text' => $request->question_text,
            'answer_explanation' => $request->answer_explanation,
            'ponderation' => $request->ponderation,
            'inicial'=>$request->inicial
        ]);

        foreach ($request->input('value') as $key => $value) {
            
            $point[$key] = $value;
        }

        if($validator->passes()){

            foreach($request->input('name') as $key => $value) {

                QuestionsOption::create([
                    'question_id' => $question->id,
                    'option'      => $value,
                    'puntaje'   => $point[$key]
                    
                ]);
            }


            return redirect()->route('questions.index');

        }

        return response()->json(['error'=>$validator->errors()->all()]);
        
    }


    /**
     * Show the form for editing Question.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $relations = [
            'topics' => \App\Topic::get()->pluck('title', 'id')->prepend('Please select', ''),
        ];

        $question = Question::findOrFail($id);

        return view('questions.edit', compact('question') + $relations);
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
        $nombre_topico=$question['topic_id'];    
        $nombre_etapa=$question['etapa_id'];
        $question['etapa_id']= DB::table('etapas')->where('id','=',$nombre_etapa)->select('Nombre')->get()->pluck('Nombre');
        $question['topic_id']= DB::table('topics')->select('title')->where('id','=',$nombre_etapa)->get()->pluck('title');
        $questions_options=DB::table('questions_options')->where('question_id','=',$id)->where('deleted_at','=',NULL)->get();

        return view('questions.show', compact('question','questions_options') + $relations);
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
