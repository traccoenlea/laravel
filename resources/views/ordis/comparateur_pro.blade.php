@extends('layouts.app')

@section('content')
<div class="comparateur comparateur_pro">
	<h2>Comparateur Professionnel</h2>
	<p>Pour les gens qui savent de quoi ils parlent ;)</p>
	<div class="list-item-ordi"> 
		@foreach($item as $id => $nom)
			<div class="list-group-item">{{$nom}}</div>
		@endforeach
	</div>
</div>
@endsection