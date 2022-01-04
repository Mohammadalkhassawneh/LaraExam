<?php

namespace App\Http\Controllers;

use App\Models\Question;
use App\Models\Exam;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $questions = Question::all();
        return view('admin.questions', compact('questions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $exams = Exam::all();
        return view('admin.create_question', compact('exams'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'exam_id' => 'required',
        ]);
    // $request['exam_id'] = '1';
     $input = $request->all();
 
        Question::create($input);

        return redirect()->route('question.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function edit(Question $question)
    {
        //
        $exams = Exam::all();
        return view('admin.edit_question', compact('exams', 'question'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Question $question)
    {
        //
        $request->validate([
            'question' => 'required',
            'answer' => 'required',
            'OptionOne' => 'required',
            'OptionTwo' => 'required',
            'OptionThree' => 'required',
        ]);

     $input = $request->all();

        $question->update($input);

        return redirect()->route('question.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Question  $question
     * @return \Illuminate\Http\Response
     */
    public function destroy(Question $question)
    {
        //
        $question->delete();
        return back();  
    }
}
