<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Favori;
use App\Models\Reponse;
use App\Models\User;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;


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
        $userId = Auth::user()->id;
        $question->user_id = $userId;
        $question->save();
        return back();

    }

    public function destroy($id){
        $question = Question::find($id);
        $question->delete();
        return back();
    }

    public function show(){
        $questions = Question::WithCount('Reponses')->orderBy('created_at', 'desc')->get();
        foreach ($questions as $question) {
            $question->published_at = Carbon::parse($question->published_at)->format('F j, Y');  
        }
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
        $question = Question::where('id', $id)->with('user')->first();
        $question->published_at = Carbon::parse($question->published_at)->format('F j, Y');

        $reponses = Reponse::where('question_id', $id)->with('user')->get();
        foreach ($reponses as $reponse) {
            $reponse->published_at = Carbon::parse($reponse->published_at)->format('F j, Y');
        }
        
        $countReponses = $reponses->count(); 

        return view("questions.details",compact('reponses','question','countReponses'));
    }

    public function populaireQuestion(){
        $questions = Question::WithCount('Reponses')->orderBy('created_at', 'desc')->get();
        foreach ($questions as $question) {
            $question->published_at = Carbon::parse($question->published_at)->format('F j, Y');  
        }
        $countQuestions = $questions->count();
        $countReponses = Reponse::count();
        $countUsers = User::count();
        $popularQuestions = Question::withCount('Reponses')->orderByDesc('reponses_count')->take(3)->get();
            return view("questions.populaires",compact('questions','countQuestions','countReponses','countUsers','popularQuestions'));
    }


    public function showByUser(){
        if (Auth::check()) {
            $userId = Auth::user()->id;
            $questions = Question::where('user_id', $userId)->WithCount('Reponses','Favoris')->orderBy('created_at', 'desc')->get();
            foreach ($questions as $question) {
                $question->published_at = Carbon::parse($question->published_at)->format('F j, Y');
            }
            $countQuestions = $questions->count();
            $Reponses = Reponse::where('user_id', $userId);
            $countReponses = $Reponses->count();
            return view("profille",compact('questions','countQuestions','countReponses'));
        } else {
            return redirect()->route('login');
        }

    }


    

 
}
