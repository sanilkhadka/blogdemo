@extends('layout.app')
@section('content')
<h1>Edit Post</h1>
{!! Form::open(['action'=>['PostController@update',$detail->id],'method'=>'POST'])!!}

    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$detail->title,['class'=>'form-control','placeholder'=>'Title Text'])}}

    </div>
    <div class="form-group">
        {{Form::label('content','Body')}}
        {{Form::textarea('content',$detail->content,['class'=>'form-control','placeholder'=>'body Text'])}}

    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('Update',['class'=>'btn btn-primary'])}}
{!!Form::close()!!}

@endsection