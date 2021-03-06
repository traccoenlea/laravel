@extends('layouts.app')

@section('content')
<div class="ordinateur_presentation content">
	<h2>{{$ordi->name}}</h2>
	<div class="ordinateur_presentation-head">
		<div class="ordinateur_presentation-img" style="--image-src: url({{$ordi->photo}})">
		</div>
		<div class="ordinateur_presentation-desc">
			<ul>
				<li>{{$ordi->marque}}</li>
				<li>{{$ordi->processeur}}</li>
				<li>{{$ordi->taille}} pouce</li>
				<a href="#fichetech" class="btn btn-outline-success">Fiche tecnique</a>
			</ul>
		</div>
	</div>
	<div class="fichetech">
		<div class="caracteristiques color">
			<div class="name">Marque</div>
			<div class="valeur">{{$ordi->marque}}</div>
		</div>
		<div class="caracteristiques">
			<div class="name">Ecran</div>
			<div class="valeur">
				<p>{{$ordi->taille}} pouces</p>
				<p>{{$ordi->resolution}}</p>
				<p>Type : {{$ordi->dalle}}</p>
				<p>{{$ordi->tactile}}</p>
			</div>
		</div>
		<div class="caracteristiques color">
			<div class="name">Processeur</div>
			<div class="valeur">{{$ordi->processeur}}</div>
		</div>
		<div class="caracteristiques">
			<div class="name">Système d'exploitation</div>
			<div class="valeur">{{$ordi->systeme}}</div>
		</div>
		<div class="caracteristiques color">
			<div class="name">Puce graphique</div>
			<div class="valeur">{{$ordi->graphique}}</div>
		</div>
		<div class="caracteristiques">
			<div class="name">Autonomie de la baterie</div>
			<div class="valeur">{{$ordi->autonomie}}</div>
		</div>
		<div class="caracteristiques color">
			<div class="name">Poids</div>
			<div class="valeur">{{$ordi->poids}}</div>
		</div>
		<div class="caracteristiques">
			<div class="name">Disque dur externe</div>
			<div class="valeur">{{$ordi->disque}}</div>
		</div>
		<div class="caracteristiques color">
			<div class="name">Disque dur ssd</div>
			<div class="valeur">{{$ordi->sdd}}</div>
		</div>
		<div class="caracteristiques">
			<div class="name">RAM</div>
			<div class="valeur">{{$ordi->ram}}</div>
		</div>
		<div class="caracteristiques color">
			<div class="name">Connectiques</div>
			<div class="valeur">
				<p>{{$ordi->usba}} {{$ordi->usba <= 1  ? "port" : "ports"}} USB</p>
				<p>{{$ordi->usbc}} {{$ordi->usbc <= 1  ? "port" : "ports"}} USB type C</p>
				<p>{{$ordi->jack}} {{$ordi->jack <= 1  ? "port" : "ports"}} jack</p>
				<p>{{$ordi->hdmi}} {{$ordi->hdmi <= 1  ? "port" : "ports"}} hdmi</p>
				<p>{{$ordi->sd}} {{$ordi->sd <= 1  ? "port" : "ports"}} Sd</p>
				<p>{{$ordi->microsd}} {{$ordi->microsd <= 1  ? "port" : "ports"}} Microsd</p>
			</div>
		</div>
	</div>
		@foreach($ordi->vendeurs as $v)
			<a href="{{$v->pivot->url}}">{{$v->name}}</a>
			{{$v->pivot->prix}}
		@endforeach

	
</div>


@endsection

