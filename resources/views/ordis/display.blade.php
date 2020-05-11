@extends('layouts.app')

@section('content')
<div class="ordinateurs content">
	<h2>Ordinateurs</h2>
	
	<div class="list-ordi">
		
		@foreach($ordis as $o)
			<a href="/ordinateurs/{{$o->id}}" class="list-ordi-item">
				<div class="list-ordi-item-photo"><img src="{{$o->photo}}"></div>
				<div class="list-ordi-item-text">{{$o->name}}</div>
			</a>
		@endforeach


		@foreach($ordis as $o)
		<div>
			<form>
				<input type="radio" value="{{$o->marque}}">{{$o->marque}}
				<!-- <intut type="radio" value="{{$o->}}" -->
 			</form>
		</div>
		@endforeach
		
	</div>
</div>	
@endsection