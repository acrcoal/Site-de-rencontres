@extends('layouts.modelGet2gether')

@section('title', 'Membres Get2Gether')

@section('content')

<div class="membres" align="center">
    <h1>Voici les membres d'user</h1>
</div>
<div id="zoneContenuMembres">
        @foreach ($membres as $admin)
        <div class="item">
                <img src="{{$admin->photo}}" width="267" height="200" class="imageItem" />                
                <div class="UserName">{{$admin->pseudo}}</div>
                <div class="age">{{ \Carbon\Carbon::parse($admin['naissance'])->diff(\Carbon\Carbon::now())->format('%y ans') }}</div>
                <div class="ville">{{$admin->ville}}</div>
                <div class="ajouter" >Favoris</div>
         </div>
        @endforeach
    </div>     
<!--</ul>-->


@endsection
 