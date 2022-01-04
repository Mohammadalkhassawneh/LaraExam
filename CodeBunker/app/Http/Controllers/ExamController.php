<?php

namespace App\Http\Controllers;

use App\Models\Exam;
use App\Models\Question;
use App\Models\Option;
use Illuminate\Http\Request;
// use Illuminate\Http\Option;

class   ExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $exams = Exam::all();
        return view('admin.exams', compact('exams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

     return view('admin/create_exam');

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
            'name' => 'required',
            'desc' => 'required',
            'Exam_img' => 'required',
        ]);

     $input = $request->all();
     if($request->file("Exam_img")) {
        $newImageName = time() . '-' . $request->Exam_img->getClientOriginalName();
        $request->Exam_img->move(public_path('images'), $newImageName);
        $input['Exam_img'] = $newImageName;
     }
        Exam::create($input);

        return redirect()->route('exam.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function show(Exam $exam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function edit(Exam $exam)
    {
        //
        return view('admin.edit_exam',compact('exam'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Exam $exam)
    {
        //
        $request->validate([
            'name' => 'required',
            'desc' => 'required',
        ]);

     $input = $request->all();
     if($request->file("Exam_img")) {
        $newImageName = time() . '-' . $request->Exam_img->getClientOriginalName();
        $request->Exam_img->move(public_path('images'), $newImageName);
        $input['Exam_img'] = $newImageName;
     }
        $exam->update($input);

        return redirect()->route('exam.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Exam  $exam
     * @return \Illuminate\Http\Response
     */
    public function destroy(Exam $exam)
    {
        //
        $exam->delete();
        return back();
    }
    public function showExam(){

        $exams= Exam::all();

        return view('exams', compact('exams')); 
    }
    public function showQuestions($id){
        $exam = Exam::find($id);
        // $questions = Question::all();
        $questions = $exam->Question;
        // $question = Question::all();
        // dd($questions);
        // $question_answers = Option::all();
        // $question_answers = Question::where('exam_id', $id)->get();
        // $answers = Option::where('question_id', $question_answers)->get();
        // $answers = Option::all();
        // dd($answers);
        
        

        return view('questions', compact('questions','exam')); 
    }
}
