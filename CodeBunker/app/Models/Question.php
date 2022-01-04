<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'question',
        'answer',
        'OptionOne',
        'OptionTwo',
        'OptionThree',
        'exam_id'
   
    ];
    public function Exam() {
        return $this->belongsTo(Exam::class);
}
    public function Options() {
        return $this->hasMany(Option::class);
    }
    public function Answer() {
        return $this->hasOne(Option::class, 'answer_id');
    }


}
