@extends('layouts.modelGeneral')

@section('title', 'Creer compte')

@section('content')
  
<section>
        
  <div id="connectBox"> </div>
        <div class="container">            
            <h1>Devenez membre gratuitement</h1>
<span>Les question précédées d'un astérique(*) sont obligatoires</span>
            <form id="formulaireInscription" name="formulaireInscription" role="form">
                <div class="form-group">
            <label for="fPrenom">*Prénom(information non visible aux membres)</label>
            <input class="form-control" id="fPrenom" type="text">
                </div>
                <div class="form-group">
                    <label for="fNom">*Nom(information non visible aux membres)</label>
                        <input class="form-control" id="fNom" type="text">
                </div>
                <div class="form-group">
                    <label for="fMail">*Courriel(information non visible aux membres)</label>
                        <input class="form-control" id="fMail" type="text">
                </div>
                <div class="form-group">
                    <label for="fCMail">*Confirmation de courriel</label>
                        <input class="form-control" id="fCMail" type="text">
                </div>
								<div class="form-group">
                    <label for="fPseudo">*Nom de membre (pseudonyme) (entre 4 et 15 caracteres pour vous identifer aux autres)</label>
                        <input class="form-control" id="fPseudo" type="text">
                </div>								
                <div class="form-group">
                    <label for="fPassword">*Mot de passe (6 caracteres minimum)</label>
                        <input class="form-control" id="fPseudo" type="text">
                </div>
                <div class="form-group">
                    <label for="fNPassword">*Confrmation du mot de passe (6 caracteres)</label>
                        <input class="form-control" id="fpassword" type="password">
                </div>               
            
        
        <fieldset class="form-group">
            <div class="row">
          <legend class="col-form-label col-sm-2 pt-0">*Sexe</legend>
          <div class="col-sm-10">
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio1">Homme</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio2">Femme</label>
            </div>
            <div class="custom-control custom-radio">
              <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
              <label class="custom-control-label" for="customRadio3">Autre</label>
            </div>
          </div>
                
            </div>
        </fieldset>
        <div class="form-group row">
            <label class="col-7 col-form-label" for="example-date-input">*Ma vraie date de naissance&nbsp;(jj/mm/aaaa) - Information non visible aux membres</label>
            <div class="col-5">
                <input class="form-control" id="example-date-input" type="date" value="2011-08-19">
            </div>
        </div>
        <div class="form-group">
            <label for="fCPays">*Mon Pays</label><br>
            <select class="selectpicker countrypicker" data-flag="true">
            </select> 
            <script>
                           $('.countrypicker').countrypicker();
            </script>
        </div>
		<div class="form-group">
                    <label for="maVille">*Ma ville</label>
                        <input class="form-control" id="maVille" type="text">
              </div>		
        <div class="form-group">
			<label for="maIntention">*Mon intention sur le site</label>
            <div class="form-check" id="checkbox1">
                <input class="custom" id="checkbox-1" name="checkbox-1" type="checkbox"> <label class="form-check-label" for="checkbox-1">Sorties en groupe</label>
            </div>
            <div class="form-check" id="checkbox2">
                <input class="custom" id="checkbox-2" name="checkbox-2" type="checkbox"> <label class="form-check-label" for="checkbox-2">Sorties à 2</label>
            </div>
            <div class="form-check" id="checkbox3">
                <input class="custom" id="checkbox-3" name="checkbox-3" type="checkbox"> <label class="form-check-label" for="checkbox-3">Sorties de type dating</label>
            </div>
            <div class="form-check" id="checkbox4">
                <input class="custom" id="checkbox-4" name="checkbox-4" type="checkbox"> <label class="form-check-label" for="checkbox-4">Sorties amicales</label>
        </div>
			  </div>
		<div class="form-group">
			<label for="fImage">*Televerser votre photo</label><br/>
			<input id="fImage" type="text" placeholder="formats acceptes : .JPG, .GIF, .JPEG" size="34%">
			<button type="submit"><i class="fa fa-search" background="#2196F3" color="white"></i></button>
        </div>				
				
		<div>
			<label for="maDescription">Description</label>			
			<textarea id="form-control"  rows="4" cols="136"></textarea>
        </div>
        <div class="form-group row">
          <div class="col-sm-10">
            <button type="submit" class="btnSauvegarder">Sauvegarder</button>
          </div>
        </div>
    
    </form>
  </div>
</section>
  
@endsection

