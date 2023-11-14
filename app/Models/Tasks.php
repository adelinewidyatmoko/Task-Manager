<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
   protected $fillable =[
    'user_id',
    'image_id',
    'status_id',
    'title',
    'description',
    'note'

   ];
    use HasFactory;

    public function image(){
        return $this->belongsTo(Images::class);//images harus ada file model imagesnya
    }

    public function status(){
        return $this->belongsTo(Status::class); // status harus ada file model statusnya 
    }
}
