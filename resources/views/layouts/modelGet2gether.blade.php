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
    <script src="https://unpkg.com/bootstrap-select-country@4.0.0/dist/js/bootstrap-select-country.min.js">	</script>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

    
		<script src="site.js"></script>

    <title>@yield('title')</title>
</head>
<body>
<div id="header">
    <a class="logo" href="home"><img src="../Images/Home/logo.jpg"></a>
    <span class="welcome"><b>Welcome: {{ $LoggedUserInfo['pseudo'] }}</b></span>
    <div id="btnNav7"><button class="btnMoreWords"><a href="{{route('membres.match')}}">Match</a></button></div>
    <div id="btnNav3"><button class="btn" ><a href="{{route('membres.showAll')}}">Mes favoris</a></button></div>
        <div id="btnNav4"><button class="btnMoreWords"><a href="{{route('auth.edit', $LoggedUserInfo)}}"> Modifier mon profil&nbsp;</a></button></div>
		<div id="btnNav5"><button class="btnVisualiser" ><a href="{{route('membres.profil')}}">Visualiser mon profil&nbsp;</a></button></div>	
	        
	    <a  class="menu" href="{{route('evenements.createEvenement')}}">&nbspÉVÉNEMENT&nbsp&nbsp&nbsp|</a> 
		<a href="{{route('membres.chat')}}">CHAT&nbsp&nbsp&nbsp|</a>
		<a href="{{route('membres.recherchermembre')}}">RECHERCHE&nbsp&nbsp&nbsp|</a> 
		<a href="{{route('blogs.showAllBlog')}}">BLOG&nbsp&nbsp&nbsp&nbsp|</a>
		<a href="{{route('groupes.createGroupe')}}">CREER UNE GROUPE&nbsp&nbsp&nbsp&nbsp|</a>		
        <a href="{{ route('auth.logout') }}">FERMER SESSION</a>
	</div>

    @yield('content')

        
    <div id="footer">
        <div id="centerFoot">
            <p class="textFoot"><a href="{{route('homes.regle')}}">Règle</a></p>
            <p class="textFoot"><a href="{{route('homes.conditions')}}">Confidentialité</a></p>
            <p class="textFoot"><a href="{{route('auth.login')}}">Devenez membre</a></p>
            <p class="textFoot"><a href="{{route('homes.noussommes')}}">A propos de nous</a></p>
            <p class="textFoot"><a href="{{route('homes.contactenous')}}">Contactez-nous</a></p>
            <p class="textFoot"><a href="#">Facebook</a></p>
            <p class="textFoot"><a href="#">Instagram</a></p>
            <p id="copyRight">Copyright 2020-2021 Get2Gether.com Tous droits réservés.</p>
        </div>       
    </div>
</body>
</html>