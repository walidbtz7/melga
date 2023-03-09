<x-home-layout>

<div class="container mw-1140">
   <!-- Home search -->
   <div class="home-search-tr">
      <!-- brand -->
        <div class="d-flex align-items-center justify-content-center logo-home-tr flex-column text-center">
                <img height="50" src="{{ asset('img/logo.svg') }}" alt="">
                <h1>the kind of jobs I like</h1>
            </div>
      <div class="nav-search-tr">
         <form action="{{ route('offers', ['country' => Request::route('country')]) }}" method="GET">
            <div class="row mx-sm-n1">
               <div class="col-md-5 px-sm-1">
                  <h4>Quoi ?</h4>
                  <div class="keyword-search-tr">
                     <label for="keywordsearch"><span class="lnr lnr-magnifier"></span></label>
                     <input type="text" name="term" id="empleo" class='form-control form-control-lg'
                        placeholder="Titre, mots-clés ou société">
                  </div>
               </div>
               <div class="col-md-5 px-sm-1">
                  <h4>Où ?</h4>
                  <div class="input-group">
                     <div class="input-group-prepend location-search-tr">
                        <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false"><img
                           src="https://resources-uzoes.s3.amazonaws.com/melga/img/Flags/canada.svg"></button>
                     </div>
                     <div class="location-search-tr-input">
                        <input type="text" id='autocomplete' name="location"
                           class='form-control' placeholder="Ville, région...">
                     </div>
                  </div>
               </div>
               <div  class="col-md-2 px-sm-1">
                     <button type="submit" class="btn btn-primary btn-lg btn-block btn-search-tr">Rechercher</button>
               </div>
            </div>
            <input type="hidden" name="source" value="site_form">
         </form>
         <div id="last_searched" class="nav-last-search-tr mt-2" style="display: none;">
            Vos dernières recherches :
         </div>
      </div>
   </div>
   <div class="d-flex align-items-center justify-content-center copy-home-tr flex-column text-center">
      <h2>Melga.com est un moteur de recherche d'emploi qui effectue des recherches sur tout l'Internet.</h2>
      <div class="img-home-tr">
         <img class="img-fluid" src="{{ asset('img/img-home.svg') }}" alt="">
      </div>
   </div>
</div>

</x-home-layout>

