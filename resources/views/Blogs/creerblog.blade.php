@extends('layouts.modelGet2gether')

@section('title', "Creer Blog")

@section('content')

<section> </div>
    <p id="titreBlog">Creer un Blog</p>
  
    <div class="contenu">
      <div id="right">
        <label>Nom du blog </label><br>
        <input class="form-blog" id="fNomBlog" type="text"><br/>
        <label>Sujet blog</label><br/>
        <textarea for="fBlog" name="sujetBlog" max rows="3" max cols="50">"Le sport et la nature"</textarea><br/><br/>
        <br/><br/>
        <button type="submit" class="btnsubmit">Creer blog</button>
      </div>
    <div id="left">
      <img src="./images/membres/Dino.jpeg" />
    </div>
    </div>
  </section>    

@endsection
 