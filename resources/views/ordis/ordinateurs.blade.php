@extends('layouts.app')

@section('content')
<h1>l'ordi numéro {{$ordi->id}}</h1>

			<img src="{{$ordi->photo}}"><a href="/ordinateurs/{{$ordi->id}}">{{$ordi->name}}</a>

@endsection

