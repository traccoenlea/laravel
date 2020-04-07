@extends('layouts.app')

@section('content')
<div class="ordinateurs">
	<h2>Ordinateurs</h2>

	<ul class="list-group list-ordis">
		@foreach($ordis as $o)
			<li class="list-group-item"><img src="{{$o->photo}}"><a href="/ordinateurs/{{$o->id}}">{{$o->name}}</a></li>
		@endforeach
	</ul>
</div>	
@endsection