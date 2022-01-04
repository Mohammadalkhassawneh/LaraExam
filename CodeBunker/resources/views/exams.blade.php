@extends('layout.master')

@section('content')

 <!--Welcoming Seaction-->
 <section class="welcome" id="welcome">
    <h1 class="heading">
      <span style="color: #404d68;">Welcome {{Auth::user()->name}}</span>
      <span class="fname"></span>
    </h1>
    <p class="sub-heading font-weight-bold">
      Choose your quiz to strengthen your knowledge.
      <br />
      <br />
    </p>
    <div class="container">
      <div class="categories-container text-center row">
          @foreach($exams as $exam)
        <div class="box-container col-md-12 col-lg-3 m-3 p-2">
          <div class="box text-center">
            <div class="image m-3">
              <img src={{asset('images/' . $exam->Exam_img)}} alt="" />
            </div>
            <h3>{{$exam->name}}</h3>
            <p>
            {{$exam->desc}}
              <br />
              <span class="time-text">
                <br />
                The test contains 7 questions.
                <br />
      
              </span>
            </p>
            <a href="{{route('ShowQuestions', $exam->id)}}" class="category-button start_btn">
              Start Quiz!
            </a>
          </div>
        </div>
        @endforeach
        {{-- <div class="box-container col-md-12 col-lg-3 m-3 p-2">
          <div class="box text-center">
            <div class="image m-3">
              <img src={{asset("publicSite/imgs/CSSLOGO.png")}} alt="" />
            </div>
            <h3>CSS</h3>
            <p>
              (CSS) Add the style and graphics to your page to make it
              interactive.Test your knowledge with this basic CSS quiz made
              especially for beginners.
              <br />

              <span class="time-text">
                <br />
                The test contains 7 questions.
                <br />
                Quiz duration: 15 sec per question.
                <br />
                <br />
              </span>
            </p>
            <a href="quize.html" class="category-button start_btn">
              Start Quiz!
            </a>
          </div>
        </div> --}}
        {{-- <div class="box-container col-md-12 col-lg-3 m-3 p-2">
          <div class="box text-center">
            <div class="image m-3">
              <img src={{asset("publicSite/imgs/JSLOGO.png")}} alt="" />
            </div>
            <h3>JavaScript</h3>
            <p>
              JS is programming language that adds interactivity to your
              website. Test your knowledge with this basic JS quiz made
              especially for beginners.
              <br />
              <span class="time-text">
                <br />
                The test contains 7 questions.
                <br />
                Quiz duration: 15 sec per question.
                <br />
                <br />
              </span>
            </p>
            <a href="quize.html" class="category-button start_btn">
              Start Quiz!
            </a>
          </div>
        </div> --}}
      </div>
    </div>
  </section>




@endsection
