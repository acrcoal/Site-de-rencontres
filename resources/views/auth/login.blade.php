@extends('layouts.modelGeneral')

@section('title', 'Space de conexion')

@section('content')
  
<section>
    <div id="initContent">
        <form action="{{ route('auth.check') }}" method="post">
        @if(Session::get('fail'))
                <div class="alert alert-danger">
                    {{ Session::get('fail') }}
                </div>
            @endif
            
            @csrf
        <div class="offset-xl-3 col-xl-6" id="connectBoxTop">
            <div class="connectBoxTopLbl">CONNECTEZ-VOUS</div>
        </div>
        <div class="connectBoxText offset-xl-3 col-xl-6">
            <label>Courriel</label><br>
            <input type="text" name="courriel" placeholder="Entrez votre courriel" value="{{ old('courriel') }}" /><hr>
            <span class="text-danger">@error('courriel'){{ $message }} @enderror</span>
        </div>
        <div class="connectBoxText offset-xl-3 col-xl-6">               
            <label>Mot de passe</label><br>
            <input type="password" name="motdepasse" placeholder="Entrez votre mot de passe" size="43px" /><hr>
            <span class="text-danger">@error('motdepasse'){{ $message }} @enderror</span>
        </div>
        <div class="connectBoxBtn offset-xl-3 col-xl-6">
            <div id="connectBoxBtnL">              
                <a class="compte" href="{{ route('auth.register') }}">Je n'ai pas de compte, créez un nouveau.</a>
            </div>
            <div id="btnNav3"><button type="submit" class="btn">Se connecter</button></div>   
        </div>
        <div class="offset-xl-3 col-xl-6" id="connectBoxBottom">
            <div class="connectBoxBottomLbl">Cliquez ici si vous avez oublié votre mot de passe</div>
        </div>
        </form> 
    </div>        

  </section>  
  
  
@endsection

