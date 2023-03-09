<x-home-layout>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
   <div class="container">
      <div class="nav-top-tr">
         <div class="nav-brand-tr">
            <a class="navbar-brand" href="/">
            <img height="28" src="{{ asset('img/logo.svg') }}" alt="">
            </a>
         </div>
         <!-- NUEVO buscador colapsado mobile -->
         <div id="prevNav" class="d-block d-sm-none" onclick="showSearch()">
            <div class="d-flex justify-content-between align-items-center mt-1 nav-search-mobile-trigger">
               <span><i class="lnr lnr-magnifier mr-2"></i> 
               te
               </span>
               <div class="btn btn-primary ml-2"><i class="lnr lnr-magnifier mr-2"></i> </div>
            </div>
         </div>
         <!-- Navbar search -->
         <div id="mnav" class="nav-search-tr d-none d-sm-block">
            <!--  d-none d-sm-block -->
            <form id="serchForm" action="/jobs" method="GET" onsubmit="registersearch()()">
               <div class="row mx-sm-n1">
                  <div class="col-md px-sm-1">
                     <div class="keyword-search-tr">
                        <label for="keywordsearch" ><span class="lnr lnr-magnifier"></span></label>
                        <input type="text" name="term" value="te" id="term" class='form-control form-control-lg'
                           placeholder="Titre, mots-clés ou société">
                     </div>
                  </div>
                  <div class=" col-md px-sm-1">
                     <div class="input-group"> 
                        <div class="input-group-prepend location-search-tr">
                           <button class="btn dropdown-toggle" type="button"
                              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img
                              src="https://resources-uzoes.s3.amazonaws.com/melga/img/Flags/france.svg"></button>
                        </div>
                        <div class="location-search-tr-input">
                           <input type="text" id='location' name="location" value=""
                              class='form-control' placeholder="Ville, région...">
                        </div>
                     </div>
                  </div>
                  <div class="col-md px-sm-1">
                     <input value="Recherchez" type="submit" class='btn btn-primary btn-lg'>
                  </div>
               </div>
               <input type="hidden" name="source" value="site_form">
            </form>
         </div>
         <!-- / Navbar search -->
      </div>
   </div>
</nav>
<main class="ly-main">
   <div class="container">
      <!-- NUEVO CAMBIO en el row & cols-->
      <h1 class="h5 text-muted mb-3 mt-3 nf-list-enc d-none d-sm-block"> Emplois: laravel</h1>
      <div class="row mx-lg-n2 mt-3">
         <!-- Left -->
         <div class="col-lg-8 px-lg-2">
            <ul id="job_list" class="list-group nf-job-list">
         
              <a herf="{{ route('offers.show', ['offer' => 1]) }}">
                <li class="nf-job list-group-item mb-3" >
                    <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                            <img alt="MyCommunIT" class="rounded-circle" height="60" src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=candiquest-ats-prog&amp;amp;empname=MyCommunIT&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                            <h2 class="mb-0"><a title="Développeur PHP Laravel &amp; JS React H/F" herf="{{ route('offers.show', ['offer' => 1]) }}">Développeur PHP Laravel &amp; JS React H/F</a></h2>
                            <p class="text-muted mt-0 mb-0">
                            <small>Origine: Talent FR Sponsored -
                            <span class="lnr lnr-calendar-full mr-1"></span> 
                            Il y a 3 jours
                            </small>
                            </p>
                        </div>
                    </div>
                    <hr>
                    <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                            <span><i class="lnr lnr-briefcase mr-2"></i>MyCommunIT</span>
                            <span><i class="lnr lnr-map-marker mr-2"></i>Paris, Île-de-france</span>
                            <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0">fulltimeNous recherchons pour un organisme international un.e  Ingénieur.e Développement PHP Laravel et JavaScript React h/f  pour un poste en  CDI  situé à proximité de </p>
                    </div>
                    </li>
             </a>
            </ul>
         </div>
      </div>
      <!-- /Left -->
      <!-- Right -->
      <div class="col-lg-4 px-lg-2">
      </div>
   </div>
   </div>
</main>
   

</x-home-layout>
