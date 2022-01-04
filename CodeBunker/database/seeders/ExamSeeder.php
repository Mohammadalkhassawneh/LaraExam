<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('exams')->insert([
            [
            'name' => 'HTML',
            'desc' => 'HTML is a primary markup language for creating websites. Test your knowledge with this basic HTML quiz made especially for beginners.',
            'Exam_img' => '1641079215-HTMLLOGO.png'
            ],
            [
            'name' => 'CSS',
            'desc' => '(CSS) Add the style and graphics to your page to make it interactive.Test your knowledge with this basic CSS quiz made especially for beginners.',
            'Exam_img' => '1641079280-CSSLOGO.png'
            ],
            [
            'name' => 'JavaScript',
            'desc' => 'JS is programming language that adds interactivity to your website. Test your knowledge with this basic JS quiz made especially for beginners.',
            'Exam_img' => '1641079269-JSLOGO.png'
            ],

        ]);
    }
}
