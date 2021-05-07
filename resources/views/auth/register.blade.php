@extends('layouts.modelGeneral')

@section('title', 'Space de conexion')

@section('content')
  
<section>
<div class="container">
    <div class="row" style="margin-top:45px">
        <div class="col-md-4 col-md-offset-4">
            <h4>Register | Custom Auth</h4><hr>
            <form action="{{ route('auth.save') }}" method="post">

            @if(Session::get('success'))
             <div class="alert alert-success">
             {{ Session::get('success') }}
             </div>
            @endif

            @if(Session::get('fail'))
             <div class="alert alert-danger">
             {{ Session::get('fail') }}
             </div>
            @endif

            @csrf
                <div class="form-group">
                    <label>Pseudo</label>
                    <input type="text" class="form-control" name="pseudo" placeholder="Enter le pseudo" value="{{ old('pseudo') }}">
                    <span class="text-danger">@error('pseudo'){{ $message }} @enderror</span>
                </div>
                <div class="form-group">
                    <label>Courriel</label>
                    <input type="text" class="form-control" name="courriel" placeholder="Entrer votre courriel" value="{{ old('courriel') }}">
                    <span class="text-danger">@error('courriel'){{ $message }} @enderror</span>
                </div>                   
                <div class="form-group">
                    <label>Mot de passe</label>
                    <input type="password" class="form-control" name="motdepasse" placeholder="Entrer votre mot de passe">
                    <span class="text-danger">@error('motdepasse'){{ $message }} @enderror</span>
                </div>
                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                <br>
                <a class="blue" href="{{ route('auth.login') }}">I already have an account, sign in</a>
            </form>
        </div>
    </div>
</div>

  </section>  
  
@endsection