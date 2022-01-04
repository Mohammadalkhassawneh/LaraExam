<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;

        protected $fillable = [
            'id',
            'name',
            'desc',
            'Exam_img',
        ];

    public function Question() {
        return $this->hasMany(Question::class);
}


}
