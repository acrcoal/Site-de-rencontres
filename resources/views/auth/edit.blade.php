@extends('layouts.modelGet2gether')

@section('title', 'Modifier compte')

@section('content')
  
<section>
        
  <div id="connectBox"> </div>
        <div class="container">   
            
            <h1>Utilisateur: {{$admin->pseudo}}</h1>
            <br>
            <h3>Modifie votre compte </h3>
            <br>
            <span>Les question précédées d'un astérique(*) sont obligatoires</span>
            <br><br>
            <form action="{{route('auth.update', $admin)}}" method="POST" id="formulaireInscription" name="formulaireInscription" role="form">

                @csrf

                @method('put')

                <div class="form-group">
                    <label for="fPrenom">*Prénom(information non visible aux membres)</label>
                    <input class="form-control" id="fPrenom" type="text" name="prenom" value="{{$admin['prenom']}}">
                </div>
                <div class="form-group">
                    <label for="fNom">*Nom(information non visible aux membres)</label>
                    <input class="form-control" id="fNom" type="text" name="nom" value="{{$admin->nom}}">
                </div>                      
                <fieldset class="form-group">
                    <div class="row">
                        <legend class="col-form-label col-sm-2 pt-0">*Sexe</legend>
                        <div class="col-sm-10">
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio1" class="custom-control-input" name="sexe" value="Homme">
                                <label class="custom-control-label" for="customRadio1">Homme</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio2" class="custom-control-input" name="sexe" value="Femme">
                                <label class="custom-control-label" for="customRadio2">Femme</label>
                            </div>
                            <div class="custom-control custom-radio">
                                <input type="radio" id="customRadio3" class="custom-control-input" name="sexe" value="Autre">
                                <label class="custom-control-label" for="customRadio3">Autre</label>
                            </div>
                        </div>                
                    </div>
                </fieldset>
                <div class="form-group row">
                    <label class="col-7 col-form-label" for="example-date-input">*Ma vraie date de naissance&nbsp;(jj/mm/aaaa) - Information non visible aux membres</label>
                    <div class="col-5">
                        <input class="form-control" id="example-date-input" type="date" value="2011-08-19" name="naissance">
                    </div>
                </div>
                <div class="form-group">
                    <label for="fCPays">*Mon Pays</label><br>
                    <select class="selectpicker countrypicker" data-flag="true" name="pays"></select> 
                    <script>
                           $('.countrypicker').countrypicker();
                    </script>
                </div>
		        <div class="form-group">
                    <label for="maVille">*Ma ville</label>
                    <input class="form-control" id="maVille" type="text" name="ville" value="{{$admin->ville}}">
                </div>		
                <div class="form-group">
			        <label for="maIntention">*Mon intention sur le site</label>
                    <div class="form-check" id="checkbox1">
                        <input class="custom" id="checkbox-1" name="intention" value="Sorties en groupe" type="checkbox"> <label class="form-check-label" for="checkbox-1" >Sorties en groupe</label>
                    </div>
                    <div class="form-check" id="checkbox2">
                <input class="custom" id="checkbox-2" name="intention" value="Sorties à 2" type="checkbox"> <label class="form-check-label" for="checkbox-2" >Sorties à 2 </label>
            </div>
            <div class="form-check" id="checkbox3">
                <input class="custom" id="checkbox-3" name="intention" value="Sorties de type dating" type="checkbox"> <label class="form-check-label" for="checkbox-3" >Sorties de type dating</label>
            </div>
            <div class="form-check" id="checkbox4">
                <input class="custom" id="checkbox-4" name="intention" value="Sorties amicales" type="checkbox"> <label class="form-check-label" for="checkbox-4" >Sorties amicales</label>
            </div>
		</div>
		<div class="form-group">
			<label for="fImage">*Televerser votre photo</label><br/>
			<input id="fImage" type="text" placeholder="formats acceptes : .JPG, .GIF, .JPEG" size="34%" name="photo" value="{{$admin->photo}}">
			<button type="submit"><i class="fa fa-search" background="#2196F3" color="white"></i></button>
        </div>				
				
		<div>
			<label for="maDescription">Description</label>			
			<textarea id="form-control"  rows="4" cols="136" name="description">"{{$admin->description}}"</textarea>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btnSauvegarder">Mise à jour</button>
          </div>
        </div>
    
    </form>
  </div>
</section>
  
@endsection
