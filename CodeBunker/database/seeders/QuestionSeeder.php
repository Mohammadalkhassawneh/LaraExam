<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
        
            [
              'question' => '1-Which of the following is correct about JavaScript?',
              'answer' => 'All of the above.',
              'exam_id'=> 3



            ],
        
            [
              'question' => '2-Which built-in method combines the text of two strings and returns a new string?',
              'answer' => 'concat()',
              'exam_id'=> 3




            ],
            [
              'question' => '3-Which built-in method combines the text of two strings and returns a new string?',
              'answer' => 'concat()',
              'exam_id'=> 3




            ],
            [
              'question' => '4-Which built-in method returns the calling string value converted to lower case?',
              'answer' => 'toLowerCase()',
              'exam_id'=> 3




            ],
            [
              'question' => '5-Which of the following function of String object returns the index within the calling String object of the last occurrence of the specified value?',
              'answer' => 'lastIndexOf()',
              'exam_id'=> 3

            ],
            
            [
              'question' => '6-Which of the following function of Array object sorts the elements of an array?',
              'answer' => 'sort()',
              'exam_id'=> 3

            ],
            [
              'question' => '7-Which of the following function of Array object sorts the elements of an array?',
              'answer' => 'sort()',
              'exam_id'=> 3

            ],
            [
              'question' => '1-Which of the following value of cursor shows it as a pointing hand?',
              'answer' => 'pointer',
              'exam_id'=> 2

            ],
            [
              'question' => '2-Which of the following is a component of CSS style rule?',
              'answer' => 'All of the above',
              'exam_id'=> 2

            ],
            [
              'question' => '3-Which of the following defines a measurement in inches?',
              'answer' => 'in',
              'exam_id'=> 2

            ],
            [
              'question' => '4-Which of the following defines 1% of viewport height?',
              'answer' => 'vh',
              'exam_id'=> 2

            ],
            [
              'question' => '5-Which of the following property is used to create a small-caps effect?',
              'answer' => 'font-variant',
              'exam_id'=> 2

            ],
            [
              'question' => '6-Which of the following property specifies whether a long point that wraps to a second line should align with the first line or start underneath the start of the marker of a list?',
              'answer' => 'list-style-position',
              'exam_id'=> 2

            ],
            [
              'question' => '7-Which of the following property is used to add or subtract space between the letters that make up a word?',
 
              'answer' => 'letter-spacing',
              'exam_id'=> 2

            ],
            [
              'question' => '1-Which of the following property is used to add or subtract space between the letters that make up a word?',

              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
            [
              'question' => '2-Which of the following property is used to add or subtract space between the letters that make up a word?',

              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
            [
              'question' => '3-Which of the following property is used to add or subtract space between the letters that make up a word?',

              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
            [
              'question' => '4-Which of the following property is used to add or subtract space between the letters that make up a word?',

              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
            [
              'question' => '5-Which of the following property is used to add or subtract space between the letters that make up a word?',

              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
            [
              'question' => '6-Which of the following property is used to add or subtract space between the letters that make up a word?',
 
              'answer' => 'letter-spacing',
              'exam_id'=> 1

            ],
          

        
        
        
        ]);
    }
}
