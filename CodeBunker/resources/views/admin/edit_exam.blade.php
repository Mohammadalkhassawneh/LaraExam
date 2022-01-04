@extends('admin.layout.master')
@section('content')

     <!-- MAIN CONTENT-->
     <div class="main-content" style="margin-left:300px;">
        <div class="section__content section__content--p30" >
            <div class="container-fluid" >
                <div class="row" >
                    <div class="col-lg-8">
                        <div class="card" >
                            <div class="card-header">Exam</div>
                            <div class="card-body" style="margin:auto;">
                                <div class="card-title">
                                    <h3 class="text-center title-2">Edit exam</h3>
                                </div>
                                <hr>
                                <form action="{{route('exam.update', $exam->id)}}" method="post" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                    <div class="form-group">
                                        <label  class="control-label mb-1">Name</label>
                                        <input  name="name" type="text" class="form-control" value='{{ $exam->name}}' >
                                    </div>
                                    <div class="form-group has-success">
                                        <label  class="control-label mb-1">Description</label>
                                        <input name="desc" type="text" class="form-control cc-name valid" value='{{ $exam->desc}}'>
                                    </div>
                                    <div class="form-group">
                                        <label  class="control-label mb-1">Image</label>
                                        <input  name="Exam_img" type="file" class="form-control cc-number identified visa" value='{{ $exam->exam_img}}'>
                                    </div>

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