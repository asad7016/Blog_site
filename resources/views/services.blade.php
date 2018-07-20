@extends('layout.master')
@section('content')
<h1>{{$title}}</h1>
@if(count($services)>0)
   <ul class="list-group"></ul>

   @foreach($services as $service)
   <li class="list-group-item">{{$service}}</li>
@endforeach
@endif
@endsection