@extends('masters.app')

@section('content')

	<h2>Areas</h2>

	<ul>
		@foreach ($areas as $area)
			<li>{{ $area->name }}</li>
		@endforeach
	</ul>
@stop