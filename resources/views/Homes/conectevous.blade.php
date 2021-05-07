@extends('layouts.modelGeneral')

@section('title', 'Space de conexion')

@section('content')
  
<section>
    <div id="initContent">
        <form>
        <div class="offset-xl-3 col-xl-6" id="connectBoxTop">
            <div class="connectBoxTopLbl">CONNECTEZ-VOUS</div>
        </div>
        <div class="connectBoxText offset-xl-3 col-xl-6">
            <label>Nom de membre ou courriel</label><br>
            <input type="text" name="login" id="" /><hr>
        </div>
        <div class="connectBoxText offset-xl-3 col-xl-6">               
            <label>Mot de passe</label><br>
            <input type="password" name="password" id="" /><hr>
        </div>
        <div class="connectBoxBtn offset-xl-3 col-xl-6">
            <div id="connectBoxBtnL">
                <input type="checkbox" id="sessionActive" name="sessionActive" value="">
                <label for="sessionActive" class="font12"> Garder ma session ouverte sur cet appareil</label> 
                <a href="home">Go to home page</a>
            </div>
            <div id="btnNav3"><button class="btn"><a href="membresList">Se connecter</a></button></div>   
        </div>
        <div class="offset-xl-3 col-xl-6" id="connectBoxBottom">
            <div class="connectBoxBottomLbl">Cliquez ici si vous avez oublié votre mot de passe</div>
        </div>
        </form> 
    </div>        

  </section>  
  
@endsection

