@extends('layouts.modelGet2gether')

@section('title', "List d'evenemnts")

@section('content')

 
<section>
    <div id="Liste" align="center">
    <div id="connectBox" align="center"> </div>
          <div class="col-sm-6">
               <div class="form-group" align="center">				 
                   <label for="dateEvenement"><h2>Liste d'evenements</h2></label>
               </div>
           <div class="form-group" align="center" >
               <table class="table" align="center">
                  <thead>
                      <tr>
                        <th>Date</th>
                        <th>Heure</th>
                        <th>Evenement</th>
                        <th>Organisateur</th>
                        <th>Place</th>
                      </tr>
                  </thead>
                  <tbody>
                      <tr>
                        <td>25 Fevrier 2021</td>
                        <td>8:00 a.m. a 11:00 a.m.</td>
                        <td>Match du ski division Enfants</td>
                        <td>Jessie90</td>
                        <td>Park Jean Drapeau</td>    
                      </tr>
                      <tr>
                        <td>15 Avril 2021</td>
                        <td>1:00 p.m. a 11:00 p.m.</td>
                        <td>Lakers vs Bulls</td>
                        <td>TomSharks</td>
                        <td>Bar sportive station Berry</td>    
                      </tr>
                      <tr>
                        <td>5 Mai 2021</td>
                        <td>11:00 a.m. a 1:00 p.m.</td>
                        <td>Pre-Match Impact Montreal vs Chicago Fire</td>
                        <td>ImpactMike</td>
                        <td>Bar sportive Station </td>    
                      </tr>
                      <tr>
                        <td>10 June 2021</td>
                        <td>8:00 a.m. a 5:00 p.m.</td>
                        <td>Ouverture des piscines</td>
                        <td>TomSharks</td>
                        <td>Park Jean Drapeau</td>    
                      </tr>
                   </tbody>
              </table>			  
              </div>
      </div></div>
  </section>   
  
@endsection
 