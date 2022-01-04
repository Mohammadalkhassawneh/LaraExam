@extends('layout.master')

@section('content')

<div class="container">
    <p>
        <h1 class="text-center">{{$exam->name . " Quiz"}}</h1>
    </p>
        
      <div>
        <form action="{{route('result.store', $exam->id)}}" method="POST" enctype="multipart/form-data">
          @csrf
          <input type="hidden" value="{{$exam->id}}" name="exam_id">

          @foreach($questions as $question)
        <h3>{{$question->question}}</h3>
        {{-- $num = $question->id; --}}
        {{-- {{$question->id}} --}}
        @foreach ($question->Options as $question_answer)
        <div class="form-check">
          
            {{-- <input class="form-check-input" type="radio" value="" id="" name="ans{{$question->id}}"> --}}
            <input class="form-check-input" type="radio" value="{{$question_answer->option}}" id="" name="ans{{$question->id}}">
            <input class="form-check-input" type="hidden" value="{{$question->answer}}" id="" name="correct{{$question->id}}">
            <input class="form-check-input" type="hidden" value="{{$question->id}}" id="" name="question{{$question->id }}">
            <label class="form-check-label" for="flexCheckDefault">
              {{$question_answer->option}}
            </label>
          </div>
        @endforeach

          {{-- </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              {{$question->OptionTwo}}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              {{$question->OptionThree}}
            </label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="radio" value="" id="flexCheckDefault">
            <label class="form-check-label" for="flexCheckDefault">
              {{$question->OptionFour}}
            </label>
          </div> --}}
          <br>
          <br>
        

          @endforeach
      </div>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error)
                  <li>You must answer all questions</li>
              @endforeach
          </ul>
      </div>
  @endif

      <button type="submit" class="btn" style="background-color: #E9860D">Submit</button>
    </form>

</div>


@endsection
