<?php

namespace App\Http\Controllers;

use App\Models\Option;
use App\Models\Question;
use App\Models\Exam;
use Illuminate\Http\Request;

class OptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $answers = Option::all();
        return view('admin.answers', compact('answers'));
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
        $questions = Question::all();
        return view('admin.create_answer', compact('exams', 'questions'));
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
            'option' => 'required',
            'question_id' => 'required',
            'exam_id' => 'required',
        ]);
    // $request['exam_id'] = '1';
     $input = $request->all();
 
        Option::create($input);

        return redirect()->route('answer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function show(Option $option)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function edit(Option $option)
    {
        //
        $exams = Exam::all();
        
        $questions = Question::all();
        // dd($option);
        return view('admin.edit_answer', compact('exams', 'questions', 'option'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Option $option)
    {
        //
        // $options = Option::find($option);
        $request->validate([
            'option' => 'required',
            'exam_id' => 'required',
            'question_id' => 'required',
          
        ]);

     $input = $request->all();

        $option->update($input);

        return redirect()->route('answer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Option  $option
     * @return \Illuminate\Http\Response
     */
    public function destroy(Option $option)
    {
        //
    }
}
