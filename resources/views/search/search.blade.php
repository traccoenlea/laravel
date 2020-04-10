@extends('layouts.app')

@section('content')
<div class="search content">
	<h2>Recherche</h2>
	<h3>Ordinateurs</h3>
		<div class="list-ordi">
			@foreach($SearchOrdi as $s)
				<a href="/ordinateurs/{{$s->id}}" class="list-ordi-item">
					<div class="list-ordi-item-photo"><img src="{{$s->photo}}"></div>
					<div class="list-ordi-item-text">{{$s->name}} </div>
				</a>
			@endforeach
		</div>
	<h3>Marques</h3>
		<div class="list-marque">
			@foreach($SearchMarque as $s)
				{{$s->marque}}
			@endforeach
		</div>
</div>	





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript">


</script>


@endsection


