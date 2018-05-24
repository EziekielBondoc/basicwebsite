@extends('layouts.app')
@section('content') 
<h1>{{$title}}</h1>

@if(count($services) > 0)
	<ul class="list-group color">
		@foreach($services as $service)
		<li class="list-group-item color">{{$service}}</li>
		@endforeach
	</ul>
@endif
@endsection