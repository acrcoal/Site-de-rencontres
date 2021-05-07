@extends('layouts.modelGet2gether')

@section('title', "Creer un groupe")

@section('content')
<div id="btnNav3"><button class="btn"><a href="mesGroupes">Mes groupes</a></button></div>
<section>
        
    <div id="connectBox"> </div>
          <div id="container">
              <div class="row">
              <h1>&nbsp;&nbsp;Creer un groupe</h1><br/>            
              <form id="formulaireGroupe" name="formulaireGroupe" role="form">
                  <div class="form-group col-lg-7">
              <label for="fTitre">Titre du groupe</label>
              <input class="form-control" id="fTitre" type="text" >
                  </div>
                  <div class="form-group col-lg-7">
                      <div><label for="fDescription">Description</label></div>                       
                      <textarea id="form-control" id="fDescription" rows="6" cols="62"></textarea>
                  </div>
                  <div class="form-group col-lg-7">
                      <label for="fImage">Image</label><br/>
                          <input id="fImage" type="text" placeholder="formats acceptes : .JPG, .GIF, .JPEG" size="34%">
                                                  <button type="submit"><i class="fa fa-search" background="#2196F3" color="white"></i></button>
                  </div>
                  <div class="form-group col-lg-7">
                      <div><label for="fMessage">Description</label></div>                       
                      <textarea id="form-control" id="fMessage" rows="6" cols="62"></textarea>
                  </div>
                  
          <div class="form-group col-lg-7">
            <div class="col-lg-7">
              <button type="submit" class="btnSauvegarder">Envoyer</button>
            </div>
          </div>
      
      </form>
        </div>
        </div>
      </section>  
@endsection
 