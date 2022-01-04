@extends('layout.master')

@section('content')

<section class="ftco-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 text-center mb-5"></div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <table class="table table-responsive-xl">
            <thead>
              <tr>
                {{-- <th>#</th> --}}
                {{-- <th>Exam</th> --}}
                <th>Exam Name</th>
                <th>Mark(Out of 10)</th>

                <th>Correct answer</th>
                <th>Wrong Answers</th>
                <th>Status</th>
                <th>Date</th>


              </tr>
            </thead>
            <tbody>
            @foreach($userResults as $userResult) 
            <tr>
                {{-- <td>{{$userResult->id}}</td> --}}
                {{-- <td>{{$userResult->exam_id}}</td> --}}
                <td>{{$userResult->exam_name}}</td>
                <td>{{$userResult->mark}} Out of 10</td>
                <td>{{$userResult->correct_ans}}</td>
                <td>{{$userResult->wrong_ans}}</td>
                <td>{{$userResult->status}}</td>
                <td>{{$userResult->created_at}}</td>
            </tr>               
                @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>


@endsection