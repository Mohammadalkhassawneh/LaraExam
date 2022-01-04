<?php

namespace App\Http\Controllers;

use App\Models\Result;
use App\Models\Exam;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = User::find(Auth::id());
        $userResults = $user->Result;
        return view('userResult', compact('userResults'));
    }

    public function showScore()
    {
        $user = User::find(Auth::id());
        $userResults = $user->Result->last();
        // $status = $userResults->status;
        // dd($status);
        return view('userScore', compact('userResults'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
        

   
        $correct=0;
        $wrong=0;
        $exam = $request->exam_id;
        $questions = Exam::find($exam)->question;
        $numOfQuestion = count($questions);
    

        for($i=0; $i<$numOfQuestion ;$i++){
        $questionNum = ($questions[$i]->id);

            $this->validate($request, [
                'ans'. $questionNum => 'required',
                
            ]);

        if($request['ans'. $questionNum] === $request['correct'. $questionNum] ){

            $correct = $correct + 1;
            
        }else{
           
            $wrong= $wrong + 1;

        }
    }

    if($correct > $wrong){
        $status = 'Passed';
    }else {
        $status = 'Failed';
    }
    
        $user_id= Auth::id();
        $exam_id= $request->exam_id;
        $examName = Exam::find($exam_id);
        $exam_name = $examName->name;
        // dd($exam_name);
        // dd($status);
        $markNum = ($correct * 10)/$numOfQuestion;
        $mark = round($markNum , 2);
        $correct_ans= $correct;
        $wrong_ans= $wrong;
        
        Result::create([
            'user_id' =>$user_id , 'exam_id' => $exam_id , 'mark' =>$mark    , 'exam_name' => $exam_name ,
            'correct_ans'=>$correct_ans , 'wrong_ans' => $wrong_ans , 'status'=>$status

    
    
    
    
    ]);
        return redirect()->route('showScore');   
        // return view('userResult');   
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function show(Result $result)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function edit(Result $result)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Result $result)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Result  $result
     * @return \Illuminate\Http\Response
     */
    public function destroy(Result $result)
    {
        //
    }
}
