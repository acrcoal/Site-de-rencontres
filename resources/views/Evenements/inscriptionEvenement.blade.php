@extends('layouts.modelGet2gether')

@section('title', "Inscription à l'événement")

@section('content')

<section>
        
    <div id="connectBox"> </div>
          <div id="container">
              <div class="row">
              <div class="col-sm-6">
              <h1>Inscription à un événement</h1>
    <form id="formulaireInscription" name="formulaireInscription" role="form">
          <div class="form-group">
            <label for="maIntention">Chercher un événement</label>
            <br/>
              <input type="text" placeholder="Search.." name="search" size="34%">
                <button type="submit"><i class="fa fa-search" background="#2196F3" color="white"></i></button>
      </div>
           <div class="form-group">
            <label for="dateEvenement">Choisir un date....</label>
            
                            
            </select>
      
          </div>
                  
                  <div class="form-group">
                  <div class='input-group date' id='datetimepicker1'>
                      <input type='text' class="form-control" />
                      <span class="input-group-addon">
                              <span class="glyphicon glyphicon-calendar"></span>
                      </span>
                  </div>
              </div>
                  
                  
          </div>
            <div class="col-sm-6">
                   <div class="form-group">				 
                   <label for="dateEvenement"><h2>Liste d'evenements</h2></label>
               </div>
           <div class="form-group">
               <table class="table">
      <thead>
        <tr>
          <th></th>
          <th>Date</th>
          <th>Titre</th>
          <th>Organisateur</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="checkbox"></td>
          <td>8 fevrier 2021 a 8am</td>
          <td>Ski a Mont-tremblant</td>
          <td>David72&nbsp;</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>9 Mars 2021 a 8am</td>
          <td>Patinage sur glace Exterieure</td>
          <td>Natally44&nbsp;</td>
        </tr>
        <tr>
          <td><input type="checkbox"></td>
          <td>18 Octobre 2021 a 8am</td>
          <td>Hockey sur Centre Bell&nbsp;</td>
          <td>July22</td>
        </tr>
      </tbody>
    </table>
               <div id="btnNav4"><button class="btnSauvegarder">S'inscrire&nbsp;</button></div>
                
              </div>
      </div>
              </div>     
    </form>
    </div>
  </section>
  
@endsection
 