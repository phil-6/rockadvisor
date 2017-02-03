@extends('masters.app')

@section('content')

	<h2>Areas</h2>

	<ul>
		@foreach ($areas as $area)
			<li><a href="{{ route('Areas.show', ['areaId' => $area->id])}}">{{ $area->name }}</a></li>
		@endforeach
	</ul>
@stop