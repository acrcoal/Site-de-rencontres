<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ url('/css/site2.css') }}" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>	
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<!--Datepicker-->
  <link rel="stylesheet" href="https://formden.com/static/cdn/bootstrap-iso.css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
     <script type="text/javascript">
      var expanded = false;

      function showCheckboxes() {
        var checkboxes = document.getElementById("checkboxes");
        if (!expanded) {
          checkboxes.style.display = "block";
          expanded = true;
        } else {
          checkboxes.style.display = "none";
          expanded = false;
        }
      }
      function showCheckboxes2() {
        var checkboxes = document.getElementById("checkboxes2");
        if (!expanded) {
          checkboxes.style.display = "block";
          expanded = true;
        } else {
          checkboxes.style.display = "none";
          expanded = false;
        }
      }
      function showCheckboxes3() {
        var checkboxes = document.getElementById("checkboxes3");
        if (!expanded) {
          checkboxes.style.display = "block";
          expanded = true;
        } else {
          checkboxes.style.display = "none";
          expanded = false;
        }
      }
    </script> 

    <script src="site.js"></script>
    <title>Site de rencontres</title>
</head>
<body>
<div id="header">
    <a class="logo" href="home"><img src="./images/home/logo.jpg"></a>
    <span class="welcome"><b>Welcome:{{ $LoggedUserInfo['pseudo'] }}</b></span>
    <div id="btnNav7"><button class="btnMoreWords"><a href="{{route('membres.match')}}">Match</a></button></div> 
    <div id="btnNav3"><button class="btn" ><a href="membres">Mes favoris</a></button></div>
    <div id="btnNav4"><button class="btnMoreWords"><a href="{{route('auth.edit', $LoggedUserInfo)}}"> Modifier mon profil&nbsp;</a></button></div>
    <div id="btnNav5"><button class="btnVisualiser" ><a href="{{route('membres.profil')}}">Visualiser mon profil&nbsp;</a></button></div>	
        
    <a  class="menu" href="creerEvenement">&nbspÉVÉNEMENT&nbsp&nbsp&nbsp|</a> 
    <a class="menu" href="chat">CHAT&nbsp&nbsp&nbsp|</a>
    <a class="menu" href="recherchermembre">RECHERCHE&nbsp&nbsp&nbsp|</a> 
    <a class="menu" href="leBlog">BLOG&nbsp&nbsp&nbsp&nbsp|</a>
    <a class="menu" href="creerGroupe">CREER UNE GROUPE&nbsp&nbsp&nbsp&nbsp|</a>
    <a class="menu" href="connectez">FERMER SESSION</a>
		
	</div>
	<div id="Match">
    <br/><br/>
    <p id="rechercherMatch"><b>Trouver votre compatibilite selon votre critere:</b>&nbsp;&nbsp;</p>
    
    <form>
      <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes()">
      <select>
        <option>Sport</option>
      </select>
      <div class="overSelect"></div>
      </div>
      <div id="checkboxes">
        <label for="one">
          <input type="checkbox" id="one" />Socer</label>
        <label for="two">
        <input type="checkbox" id="two" />Velo</label>
        <label for="three">
        <input type="checkbox" id="three" />Tennis</label>
    </div>
    </div>
      <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes2()">
      <select>
        <option>Sex</option>
      </select>
      <div class="overSelect"></div>
      </div>
      <div id="checkboxes2">
        <label for="one1">
          <input type="checkbox" id="one1" />Homme</label>
        <label for="two2">
        <input type="checkbox" id="two2" />Femme</label>
        <label for="three3">
        <input type="checkbox" id="three3" />Autre</label>
    </div>
    </div>
    <div class="multiselect">
        <div class="selectBox" onclick="showCheckboxes3()">
      <select>
        <option>Ville</option>
      </select>
      <div class="overSelect"></div>
      </div>
      <div id="checkboxes3">
        <label for="one11">
          <input type="checkbox" id="one11" />Montreal</label>
        <label for="two22">
        <input type="checkbox" id="two22" />Laval</label>
        <label for="three33">
        <input type="checkbox" id="three33" />Quebec</label>
    </div>
    </div>
     <div class="multiselect">
     ​<form action="/action_page.php"
      oninput="x.value=parseInt(a.value)+parseInt(b.value)">
      0
      <input type="range" onchange="submit" min="0" max="100" id="a" name="a" value="50">
      100 <p>km</p>
  
        <output name="x" for="a b"></output>&nbsp;&nbsp;
        
      <input id="rechercher2" type="submit" name="Rechercher2" value="Rechercher" >
      </div>
      </form>

    </form>
    
  </div>
  <div>
   <h1>Resultat de la recherche</h1><br/>
   </div>
  <div class="afficherMatch">
             
        <div class="item2">
            <img src="./images/membres/w3.jpg" width="267" height="200" class="imageItem" />
			<div class="UserName">VeloLover </div>
			<div class="age">31 ans</div>
            <div class="ville">Montreal</div>            
            <div class="ajouter" >Chater</div>
		</div>
        <div class="item2">
            <img src="./images/membres/h11.jpg" width="267" height="200" class="imageItem" />
			<div class="UserName">TomSharks </div>
			<div class="age">26 ans</div>
            <div class="ville">Winnipeg</div>	
            <div class="ajouter" >Chater</div>
		</div>		
        <div class="item2">
		    <img src="./images/membres/h22.jpg" width="267" height="200" class="imageItem" />
			<div class="UserName">BigMountain </div>
			<div class="age">37 ans</div>
            <div class="ville">Toronto</div>
            <div class="ajouter" >Chater</div>
        </div>
		<div class="item2">
			<img src="./images/membres/w1.jpg" width="267" height="200" class="imageItem" />
			<div class="UserName">Jessie90 </div>
			<div class="age">31 ans</div>
            <div class="ville">Vancouver</div>			
            <div class="ajouter" >Chater</div>
        </div>			
    </div> 
  
    <div id="footer">
        <div id="centerFoot">
            <p class="textFoot"><a href="regles">Règle</a></p>
            <p class="textFoot"><a href="conditions">Confidentialité</a></p>
            <p class="textFoot"><a href="creercompte">Devenez membre</a></p>
            <p class="textFoot"><a href="noussommes">A propos de nous</a></p>
            <p class="textFoot"><a href="contacte">Contactez-nous</a></p>
            <p class="textFoot"><a href="#">Facebook</a></p>
            <p class="textFoot"><a href="#">Instagram</a></p>
            <p id="copyRight">Copyright 2020-2021 Get2Gether.com Tous droits réservés.</p>
        </div>       
    </div>
    <script type="text/javascript">
        $(function() {
            $('#datetimepicker1').datetimepicker();
        });
    </script>
</body>
</html>