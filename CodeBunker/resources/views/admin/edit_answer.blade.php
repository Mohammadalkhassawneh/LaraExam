@extends('admin.layout.master')
@section('content')
  <!-- MAIN CONTENT-->
  <div class="main-content" style="margin-left:300px;">
    <div class="section__content section__content--p30" >
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-lg-8">
                    <div class="card" >
                        <div class="card-header">Answer</div>
                        <div class="card-body" style="margin:auto;">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Answer</h3>
                            </div>
                            <hr>
                            <form action="{{route('answer.update', $option->id)}}" method="post" enctype="multipart/form-data">
                            @csrf   
                            @method('put')
                                <div class="form-group">
                                    <label  class="control-label mb-1">Answer</label>
                                    <input  name="option" type="text" class="form-control" value='{{ $option->option}}' >
                                </div>
                      
                      
                                <label  class="control-label mb-1">Exam Name</label>
                                <select class="form-select w-100 mb-3 py-1 px-2" name="exam_id" aria-label="Default select example">

                                    @foreach($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->name}}</option>
                                    @endforeach
                                </select>

                                <label  class="control-label mb-1">Question</label>
                                <select class="form-select w-100 mb-3 py-1 px-2" name="question_id" aria-label="Default select example">

                                    @foreach($questions as $question)
                                    <option value="{{$question->id}}">{{$question->question}}</option>
                                    @endforeach
                                </select>
  

                                </div>
                                <div style="margin:0 0 10px 100px;">
                                <button type="submit" class="btn btn-primary" >Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
</div>
</div>
</div>


@endsection