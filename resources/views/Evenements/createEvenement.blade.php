@extends('layouts.modelEvenement')

@section('title', "Creer un événement")

@section('content')

<div id="titreEv">
    <br/><br/>
    <p id="titreEvenement"><b>Creer un evenement</b></p>
  </div>
  <div class="contenu">
    <div class="bootstrap-iso">
      <div class="right"> 
        
            <div class="form-group">
            <label for="maIntention">Nom evenement</label>
            <br/><br/>
            <input type="text" placeholder="Nom evenement" name="nomEvenement" width="25%"/>
              <br/><br/>
             <label>Description evenement</label><br/><br/>
             <textarea>Description evenement</textarea><br/>
          </div><br/><br/>
          <div class="form-date">
            <label for="dateEvenement" >Choisir un date....</label>
         <br/><br/>
    
          </div>
          
          <div class="form-date">
                <div class='input-group date'  id='datetimepicker1'>
                    <input type='text' width="25%" class="form-control" />
                    <span class="input-group-addon">
                            <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                </div>
            </div>
				<br/><br/>
          <div class="form-group"> <!-- Submit button -->
            <button class="btn btn-primary " name="submit" type="submit" >Submit</button>
          </div>
         </div> 
		   </div>
           <div class="left">
            <img src="./Images/Evenements/Event1.jpg" />
            <div id="btnNav3"><button class="btn"><a href="listEvenement">List d'evenements</a></button></div>
            <div id="btnNav3"><button class="btn"><a href="inscriptionEvenement">inscrivez-vous à un événement</a></button></div>
          </div>
     </div>
      <br/>
      <br/>    
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
    
  </div>
@endsection
 