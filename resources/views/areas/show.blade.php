@extends('masters.app')

@section('content')

	<h2>Crags in {{ $area->name }}</h2>

	<ul>
		@foreach ($crags as $crag)
			<li>{{ $crag->name }} ({{ $crag->description }})</li>
		@endforeach
	</ul>
@stop