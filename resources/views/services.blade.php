@extends('layout.app')
@section('content')
<div class="jumbotron text-center">
    <h1>Complete Care On Your Schedule</h1>
    <h3>Bring Life To Smile</h3>
</div>
<h1>{{$tit}}</h1>
    @if(count($services) > 0)
    <ul class="list-group">
        @foreach ($services as $service)
            <li class="list-group-item">{{$service}}</li>    
        @endforeach
    </ul>
    @endif
@endsection