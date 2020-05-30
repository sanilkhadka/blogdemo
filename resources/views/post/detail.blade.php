@extends('layout.app')
@section('content')
<div class="alert alert-primary">

    <h3>{{$detail->title}}</h3>
    <p>{{$detail->content}}</p>
    <small>{{$detail->created_at}}</small>
<small>Blog Created at{{$detail->created_at}}</small>
<a href="{{url('post/')}}/{{$detail->id}}/edit" class="btn btn-primary">Edit</a>

{!!Form::open(['action'=>['PostController@destroy',$detail->id],'method'=>'POST','class'=>'pull-right'])!!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}

</div>
@endsection
    

 
