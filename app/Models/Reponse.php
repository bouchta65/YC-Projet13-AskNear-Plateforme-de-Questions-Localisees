<?php 
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Reponse extends Model {
    use HasFactory;

protected $table = 'reponse';

  protected $fillable=[
    'content',
    'question_id',
    'user_id',
  ];

  public function question(){
    return $this->belongsTo(Question::class);
  }

  public function user(){
it a  }

  

//   public function getdateAttribute($value){
//     return \Carbon\Carbon::parse($value)->format('d-m-Y H:i:s');
//   }

 
  
}

?>