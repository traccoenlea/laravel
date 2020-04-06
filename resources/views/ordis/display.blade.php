@extends('layouts.app')

@section('content')
<div class="ordinateurs">
	<h2>Ordinateurs</h2>

	<ul class="list-group list-ordis">
		@foreach($ordis as $id => $nom)
			<li class="list-group-item"><a href="/ordinateurs/{{$id}}">{{ $nom }}</a></li>
		@endforeach
	</ul>
</div>	
@endsection