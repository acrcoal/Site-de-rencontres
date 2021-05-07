@extends('layouts.modelGet2gether')

@section('title', 'Recherche de membres')

@section('content')

<div class="membres" align = "center"> 
    <h1>Rechercher un membre</h1>
</div>
<div id="zoneContenuMembres">
    <form action="{{route('membres.recherchermembre')}}" method="GET">
        <div class="form-group">
            <span class="col-md-1 col-md-offset-2 text-center">
                <i class="fa fa-user bigicon"></i>
            </span>
            <div class="col-md-8">
                <input type="text" name="search" id="fname" value="{{$search}}" placeholder="Pseudo ou mot-clé" class="form-control">
            </div>
        </div>
        <div id="btnNav5">
            <button class="btnVisualiser">
                Rechercher
            </button>
        </div>
    </form>
    <div class="container">                       
        @if(count($admins)<=0)
            <tr>
                <td colspan="7">
                   Aucune resultat trouve
                </td>    
            </tr>
        @else
            @foreach ($admins as $admin)
            <div class="item">
                <img src="{{$admin->photo}}" width="267" height="200" class="imageItem"/>    
                <div class="UserName">{{$admin->pseudo}}</div>    
                <div class="age">{{ \Carbon\Carbon::parse($admin->naissance)->diff(\Carbon\Carbon::now())->format('%y ans') }}</div>
                <div class="intention">{{$admin->intention}}</div>
                <div class="ajouter" >Favoris</div>
            </div>
            @endforeach
        @endif                    
    </div>
</div>
@endsection
 