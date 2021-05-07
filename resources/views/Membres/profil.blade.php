@extends('layouts.modelGet2gether')

@section('title', 'Mon Profil')

@section('content')

<section>
    Visualiser profil: <b>{{ $LoggedUserInfo['pseudo'] }}</b> 
	
	<div id="connectBox"> </div>
		  <div class="container">
			  <h1>Mon profil</h1>
		  </div> 
		  <div  class="monprofil">
		  <!--@foreach ($data as $admin)-->
			  <div class="monimage"><img  alt="Image photo profil" src="{{ $LoggedUserInfo['photo'] }}"/></div>
			  <div class="detailsprofil">			  
				<ul>
				  <li><label for="fpseudo">{{ $LoggedUserInfo['pseudo'] }}</label></li>
				  <li><label for="fAge">Age:</label>
				  {{ \Carbon\Carbon::parse($LoggedUserInfo['naissance'])->diff(\Carbon\Carbon::now())->format('%y ans') }}</li>
				  <li><label for="fVille">Ville:</label>{{ $LoggedUserInfo['ville'] }}</li>
				  <li><label for="fPays">Pays:</label>{{ $LoggedUserInfo['pays'] }}</li>
				  <li><label for="fDescription">Description: </label></li>
				  <li><textarea for="fDescription" name="Description" max rows="3" max cols="50">{{ $LoggedUserInfo['description'] }}</textarea></li>
				</ul>
				<!--@endforeach-->
				</div>
		  </div>
	</div>
  </section>

@endsection
 