@extends('admin.layout.master')
@section('content')
  <!-- MAIN CONTENT-->
  <div class="main-content" style="margin-left:300px;">
    <div class="section__content section__content--p30" >
        <div class="container-fluid" >
            <div class="row" >
                <div class="col-lg-8">
                    <div class="card" >
                        <div class="card-header">Question</div>
                        <div class="card-body" style="margin:auto;">
                            <div class="card-title">
                                <h3 class="text-center title-2">Edit Question</h3>
                            </div>
                            <hr>
                            <form action="{{route('question.update', $question->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('put')
                                <div class="form-group">
                                    <label  class="control-label mb-1">Question</label>
                                    <input  name="question" type="text" class="form-control" value='{{ $question->question}}' >
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Option One</label>
                                    <input name="OptionOne" type="text" class="form-control cc-name valid" value='{{ $question->OptionOne}}'>
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Option Two</label>
                                    <input name="OptionTwo" type="text" class="form-control cc-name valid" value='{{ $question->OptionTwo}}'>
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Option Three</label>
                                    <input name="OptionThree" type="text" class="form-control cc-name valid" value='{{ $question->OptionThree}}'>
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Option Four</label>
                                    <input name="OptionFour" type="text" class="form-control cc-name valid" value='{{ $question->OptionThree}}'>
                                </div>
                                <div class="form-group has-success">
                                    <label  class="control-label mb-1">Answer</label>
                                    <input name="answer" type="text" class="form-control cc-name valid" value='{{ $question->answer}}'>
                                </div>
                                <select class="form-select w-100 mb-3 py-1 px-2" name="exam_id" aria-label="Default select example">
                                    @foreach($exams as $exam)
                                    <option value="{{$exam->id}}">{{$exam->name}}</option>
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