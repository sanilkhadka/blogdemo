@extends('layout.app')
@section('content')
<h1>Blog post</h1>
<a href="{{url('/post/create')}}" class="btn btn-primary">Create Post </a>
@if(count($data)>0)
    @foreach ($data as $item)
        <div class="alert alert-primary">
            <a href="{{url('/post')}}/{{$item->id}}">
                {{$item->title}}</a>
            
        </div>
    @endforeach
    @else
    <h1>data not found</h1>
@endif
@endsection
    

 
