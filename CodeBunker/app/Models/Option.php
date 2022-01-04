<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    use HasFactory;
    protected $fillable = [
        'id',
        'option',
        'exam_id',
        'question_id',
    ];
    public function Question() {
        return $this->belongsTo(Question::class);
}   

}
