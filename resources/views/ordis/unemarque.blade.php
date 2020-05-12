@extends('layouts.app')

@section('content')
<div class="content ordinateurs">
    <h2>Nom de la marque</h2>

    <div class="list-ordi">

    @foreach($unemarque as $u)
            <a href="/ordinateurs/{{$u->id}}" class="list-ordi-item">
                <div class="list-ordi-item-photo"><img src="{{$u->photo}}"></div>
				<div class="list-ordi-item-text">{{$u->name}}</div>
            </a>
            
	@endforeach		

    </div>

</div>


@endsection

