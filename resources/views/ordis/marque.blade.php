@extends('layouts.app')

@section('content')

<div>
    Les marques

        @foreach($ordis as $o)
			<a href="/marques/{{$o->marque}}" class="list-ordi-item">
				<div class="list-ordi-item-text">{{$o->marque}}</div>
			</a>
		@endforeach		
    

</div>

@endsection

