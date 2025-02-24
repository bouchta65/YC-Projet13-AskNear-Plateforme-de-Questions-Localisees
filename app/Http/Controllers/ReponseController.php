<?php

namespace App\Http\Controllers;

use App\Models\Reponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReponseController extends Controller
{
   


    public function save(Request $request, $id){

        $validated = $request->validate([
            'content' => 'required',
        ]);
        
        $reponse = new Reponse();
        $reponse->content = $validated['content'];
        $reponse->published_at = now();
        $reponse->user_id = Auth::user()->id;;
        $reponse->question_id = $id;
        $reponse->save();
        return redirect('details/'.$id);
    }

    // public function edit(Request $request , $id){
    //     $question = Question::find($id);

    //     $validated = $request->validate([
    //         'title' => 'required|max:255',
    //         'content' => 'required',
    //         'location' => 'required',
    //     ]);
        
    //     $question = new Question();
    //     $question->title = $validated['title'];
    //     $question->content = $validated['content'];
    //     $question->location = $validated['location'];
    //     $question->published_at = now();
    //     $question->user_id = 1;
    //     $question->save();
    //     return "Question enregistrée";
    // }

    // public function delete(Request $request , $id){
    //     $question = Question::find($id);
    //     $question->delete();
    //     return "Question enregistrée";
    // }



 
}
