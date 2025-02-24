<?php

namespace App\Http\Controllers;

use App\Models\Favori;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class FavorisController extends Controller
{
    public function show()
    {
        if (Auth::check()) {
            $userId = Auth::user()->id;
            

            $favoris = Favori::where('user_id', $userId)->with('question')->get();

            foreach ($favoris as $favori) {
                $favori->question->published_at = Carbon::parse($favori->question->published_at)->format('F j, Y');
            }
            
            $countFavoris = Favori::where('user_id', $userId)->count();



            return view("questions.favoris", compact('favoris', 'countFavoris'));
        } else {
            return redirect()->route('login');
        }
    }

    public function addFavoris($id){
        if (Auth::check()) {
            $userId = Auth::user()->id;

            $favoriExiste = Favori::where('user_id', $userId)
                          ->where('question_id', $id)
                          ->exists();

            if ($favoriExiste) {
                return redirect()->back()->with('info', 'Cette question est déjà dans vos favoris.');
            }
            $questionId = $id;
            $favori = new Favori();
            $favori->user_id = $userId;
            $favori->question_id = $questionId;
            $favori->save();
            return back();
        } else {
            return redirect()->route('login');
        }
    }
}
