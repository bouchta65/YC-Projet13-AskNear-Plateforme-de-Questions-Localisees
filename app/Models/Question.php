<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    // Définir la table associée au modèle
    protected $table = 'question';

    // Attributs pouvant être affectés en masse
    protected $fillable = [
        'title',         
        'content',       
        'location',     
        'published_at', 
        'user_id',       
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function Reponses()
    {
        return $this->hasMany(Reponse::class);
    }

    public function favorites()
    {
        return $this->belongsToMany(User::class, 'favori');
    }




    
    // // Scope pour trier les questions par distance
    // public function scopeNearby($query, $latitude, $longitude, $radius = 10)
    // {
    //     return $query->whereRaw(
    //         "(6371 * acos(cos(radians(?)) * cos(radians(latitude)) * cos(radians(longitude) - radians(?)) + sin(radians(?)) * sin(radians(latitude)))) <= ?)",
    //         [$latitude, $longitude, $latitude, $radius]
    //     );
    // }

    // // Fonction pour obtenir la date de publication formatée
    // public function getPublishedAtAttribute($value)
    // {
    //     return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
    // }
}
