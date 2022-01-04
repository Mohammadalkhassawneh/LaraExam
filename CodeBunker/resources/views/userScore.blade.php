@extends('layout.master')

@section('content')


<div class="container h-100">

<div class="text-center h-100">
    @if($userResults->status == 'Failed')
<h1>Sorry you failed</h1>
<h3 class="text-danger">You got {{$userResults->mark}} out of 10</h3>
<a href="{{route('result.index')}}"><button type="submit" class="btn btn-danger" >Show your all results</button></a>


@else

<h1>Congrats</h1>
  <h3 class="text-success">You Got {{$userResults->mark}} out of 10</h3> 
  <a href="{{route('result.index')}}"><button type="submit" class="btn btn-success" >Show your all results</button></a>

@endif

</div>
</div>



@endsection