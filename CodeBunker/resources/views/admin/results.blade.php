@extends('admin.layout.master')
@section('content')


<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">


        <div class="row">
                <div class="col-md-12">
                    <!-- DATA TABLE -->
                    <h3 class="title-5 m-b-35">Question Table</h3>
                    <div class="table-data__tool">
                        <div class="table-data__tool-left">
                            <div class="rs-select2--light rs-select2--md">
                            </div>
                            <div class="rs-select2--light rs-select2--sm">
                            </div>
                        </div>
                        <div class="table-data__tool-right">
                        <a href="{{route('question.create')}}"  style="float: right;"class="au-btn au-btn-icon au-btn--green au-btn--small">Add Question</a>
                        </div>
                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                                <tr>
                                    
                                    {{-- <th> Id</th> --}}
                                    <th>User id</th>
                                    <th>Exam Name</th>
                                    <th>Mark(Out of 10)</th>
                                    <th>Correct answers</th>
                                    <th>Wrong Answers</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($results as $result)
                                <tr class="tr-shadow">
                                   
                                    {{-- <td> <img src="{{ asset('images/'. $exam->Exam_img) }}" width="100px" height="70px" alt="Image"></td> --}}
                                    <td class="desc">{{$result->user_id}}</td>
                                    <td>
                                     <span>{{ $result->exam_name}}</span>
                                    </td>


                                    <td class="desc">{{ $result->mark}}</td>
                                    <td class="desc">{{ $result->correct_ans}}</td>
                                    <td class="desc">{{ $result->wrong_ans}}</td>
                                    <td class="desc">{{ $result->status}}</td>
                                    <td class="desc">{{ $result->created_at}}</td>

                        <td>
                            <div class="table-data-feature">
                                <form action="{{route("results.destroy",$result->id)}}" method="POST">
                                    @csrf
                                    @method("delete")
                                    <button type="submit" class="item mr-2" data-toggle="tooltip" data-placement="top" title="Delete">
                                    <i class="zmdi zmdi-delete"></i>
                                </button>
                                </form>
                                <a href="{{route("result.edit",$result->id)}}">
                                <button class="item mr-2" data-toggle="tooltip" data-placement="top" title="Edit">
                                    <i class="zmdi zmdi-edit"></i>
                                </button>
                                </a>
                            </div>
                        </td>
                                </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                    <!-- END DATA TABLE -->
                </div>
            </div>
</div>
</div>
</div>




@endsection