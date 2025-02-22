<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Reponse;
use App\Models\User;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
   


    public function save(Request $request){

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'location' => 'required',
        ]);
        
        $question = new Question();
        $question->title = $validated['title'];
        $question->content = $validated['content'];
        $question->location = $validated['location'];
        $question->published_at = now();
        $question->user_id = 1;
        $question->save();
        return redirect('/');

    }

    public function edit(Request $request , $id){
        $question = Question::find($id);

        $validated = $request->validate([
            'title' => 'required|max:255',
            'content' => 'required',
            'location' => 'required',
        ]);
        
        $question = new Question();
        $question->title = $validated['title'];
        $question->content = $validated['content'];
        $question->location = $validated['location'];
        $question->published_at = now();
        $question->user_id = 1;
        $question->save();
        return "Question enregistrée";
    }

    public function delete(Request $request , $id){
        $question = Question::find($id);
        $question->delete();
        return "Question enregistrée";
    }

    public function show(){
        $questions = Question::WithCount('Reponses')->orderBy('created_at', 'desc')->get();
        $countQuestions = $questions->count();
        $countReponses = Reponse::count();
        $countUsers = User::count();
        $popularQuestions = Question::withCount('Reponses')->orderByDesc('reponses_count')->take(3)->get();
            return view("index",compact('questions','countQuestions','countReponses','countUsers','popularQuestions'));
    }

    public function showById($id){
        $question = Question::find($id); 
        if (!$question) {
            abort(404); 
        }
        $reponses = Reponse::where('question_id', $id)->with('user')->get();
        $countReponses = $reponses->count(); 

        return view("questions.details",compact('reponses','question','countReponses'));
    }
    

 
}
