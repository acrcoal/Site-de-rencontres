@extends('layouts.modelGeneral')

@section('title', 'GET2GETHER Site de recontre')

@section('content')
  
  <div id="moto">
    <p>Le site de rencontre pour gens qui aiment bouger a 2 ou a plusieurs</p>
  </div>
  
  <section>      

    <div id="publicite">
      <a class="publicite" href="index.html"><img src="./images/home/image1.jpg" height="50%" width="50%"></a>
      <a class="publicite" href="index.html"><img src="./images/home/image3.jpg" height="50%" width="50%"></a>
      <a class="publicite" href="index.html"><img src="./images/home/image4.jpg" height="50%" width="50%"></a>
      <a class="publicite" href="index.html"><img src="./images/home/image9.jpg" height="50%" width="50%"></a>
      <a class="publicite" href="index.html"><img src="./images/home/image8.jpg" height="50%" width="50%"></a>
      <a class="publicite" href="index.html"><img src="./images/home/image11.jpg" height="50%" width="50%"></a>
    </div>
  </section>
  
  <section>
    <div id="content">
      <div id="text1">
        <p>
          <img height="50%" width="50%" src="./images/home/home.jpg" /> 
          L'idée de créer RencontreSportive.com m'est venue en gérant l'Équipe Les Fées, une association de sportives aventurières que j'avais fondé à la suite de ma participation au Rallye des Gazelles en 1999. Les Fées, cela consistait à nous préparer (logistique et entrainement) ensemble et à partager nos ressources (retombées médiatiques, fournisseurs, commanditaires). Le but était de vivre la solidarité féminine à travers un accomplissement. Nous avons ainsi couru les rallyes Roses des Sables et Les Gazelles, des raids de vélo en Thaïlande et au Kenya, le Grand Tour de Vélo-Québec. Nous avons aussi gravi le Kilimandjaro et pris part à des courses de bateaux-dragons. Au bout de 5 années, plus de 500 femmes avaient relevé l'un des 30 défis des Fées. Mais il en fallait plus. Des quatre coins de la province, on me proposait des activités à ajouter à notre calendrier et je ne pouvais répondre à la demande. Alors j'ai imaginé un site web qui favoriserait un maximum de participations sportives au Québec et à l'étranger, sans que j'aie à les coordonner. Ce site a donc d'abord été prévu pour les femmes. Puis j'ai réalisé qu'il serait plus intéressant s'il était mixte, permettant ainsi de mettre en contact plus de gens ayant en commun l'amour du sport, du plein air, de l'aventure et du défi.
        </p>
      </div>
      <div id="text2">
        <ul>
          <p id="decoration">Le dernieres activites le plus populaire</p>
          <li> <a class="evenement" href="index.html"/>
          <p>Evenement1</p></li>
          <li> <a class="evenement" href="index.html"/>
          <p>Evenement2</p></li>
          <li><a class="evenement" href="index.html"/>
          <p>Evenement3</p></li>
        </ul>
      </div>
    </div>
  </section>
@endsection

