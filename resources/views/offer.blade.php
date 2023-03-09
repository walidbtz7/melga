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
<script type="text/javascript">
   function showSearch() {
     var element = document.getElementById("mnav");
     element.classList.remove("d-none");
     var element2 = document.getElementById("prevNav");
     element2.classList.remove("d-block");
     element2.classList.remove("d-sm-none");
     element2.classList.add('d-none');
   } 
</script>
<script type="text/javascript">
   $(document).ready(function () {
       dataLayer.push({
               'keyword':'Alternance Développeur web Laravel / Vue.js - Cergy ',
               'location': 'fr Cergy',
               'event': 'search'});
   });
   
</script>
<script type="text/javascript">
   function registersearch(){
       var serchForm = document.getElementById("serchForm");
       var texto = document.getElementById("location");
       var empleo = document.getElementById("term");
       dataLayer.push({
               'keyword': empleo.value,
               'location': texto.value,
               'event': 'search'});
       serchForm.submit();
   }
</script>
<!-- MAIN -->
<main class="ly-main">
   <div class="container">
      <!-- NUEVO CAMBIO en el row & cols-->
      <div class="row mx-lg-n2 mt-3">
         <!-- Left -->
         <div class="col-lg-8 px-lg-2">
            <div class="nf-job-list mobile-row-minus">
               <!--/ ADSENSE HE PUESTO DE EJEMPLO LOS NUESTROS PARA QUE NO QUEDE VACIO-->
               <!-- Job item card -->
               <div class="card-tr nf-job mb-3 no-hov no-cursor">
                  <div class="">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="ISCOD" class="rounded-circle" height="60px"
                              src="https://resources-uzoes.s3.us-west-2.amazonaws.com/img/letters/I.png">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h1 class="mb-0 h2">Alternance Développeur web Laravel / Vue.js - Cergy </h1>
                           <p class="text-muted mt-0 mb-0"><small>Origine: Monster JB FR -
                              <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a  
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc-box mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i
                              class="lnr lnr-briefcase mr-2"></i>ISCOD</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Cergy</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span> 
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <!-- JOB DESCRIPTION -->
                        L’iSCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, spécialisée dans le développement de solutions Web sur mesure, un(e) Développeur/se web Laravel / en contrat d'apprentissage, pour préparer l’une de nos formations diplômantes reconnues par l'Etat de niveau 5 à niveau 7 (Bac+2, Bachelor/Bac+3 et Mastère/Bac+5)<br/>Optez pour l’alternance nouvelle génération avec l'iSCOD !<br/><br/>Intégrez une équipe jeune et dynamique de 2 à 3 personnesIntervenez entre 5 à 8 projets sur l'année Développement Web<br/><br/>Vous êtes autonomeVous maîtrisez Laravel et ;
                        <!-- END JOB DESCRIPTION -->
                        <hr class="mb-4 mt-4">
                        <div class="d-flex justify-content-between align-items-center nav-apply-nf">
                           <button type="button" class="btn btn-link border-0 text-left" data-toggle="modal"
                              data-target="#reportJobModal">
                           <span class="lnr lnr-warning mr-1"></span>
                           <span>Signaler cet emploi</span>
                           </button>
                           <button data-toggle="modal" data-target="#applyModal" onclick="openJob()"
                              class="btn btn-outline-primary nav-apply-nf-fixed" type="button">
                           S'inscrire
                           </button>
                           <!-- Modal appply-->
                           <div class="modal fade bb-apply-modal" id="applyModal" tabindex="-1"
                              aria-labelledby="applyModalLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                 <div class="modal-content">
                                    <div class="modal-header border-0 pb-0"> <button type="button"
                                       class="close" data-dismiss="modal" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                    </div>
                                    <form action="/apply" method="POST">
                                       <input type="hidden" name="csrfmiddlewaretoken" value="oi6E5FbzxjXPd1RUZSbOuLOiExVNCiBaLy77zrLdJAHgw7xs80y1JRJHLvAS1ZPW">
                                       <div class="modal-body text-center">
                                          <h4 class="mb-3">Embauche immédiate</h4>
                                          <p>Recevez des alertes similaires à
                                             <strong>Alternance Développeur web Laravel / Vue.js - Cergy </strong>.
                                          </p>
                                          <hr class="mt-4 mb-4">
                                          <div class="form-group text-left">
                                             <label>Adresse de courrier électronique</label>
                                             <input iid='email' type="email"
                                                class="form-control form-control-lg" name="email"
                                                placeholder="Entrez un email" required=""
                                                autofocus="" value="">
                                          </div>
                                          <button type="submit" onclick="correoReg()"
                                             class="btn btn-primary btn-lg btn-block">Continuer</button>
                                          <p class="mt-4 text-term">
                                             En poursuivant, je donne mon consentement à melga.com pour traiter mes données et m'envoyer des alertes, comme détaillé dans le
                                             <a class="bb-text-link" href="/terms_and_conditions">Conditions d'utilisation et politique de confidentialité</a> 
                                             de melga.com. Je peux retirer mon consentement ou me désinscrire à tout moment.
                                          </p>
                                          <a class="bb-text-link" style="cursor:pointer;" onclick="checkRedirect()" >Sauter</a> <!-- href="/job/530c39d8fa06d889d6731acefe3ded77f4b96ec038efe8cf34ecfc1615e681f9/redirect/" -->
                                       </div>
                                    </form>
                                 </div>
                              </div>
                           </div>
                           <!-- /Modal appply-->
                        </div>
                     </div>
                  </div>
               </div>
               <!-- /Job item  card-->
               <div class="card-tr br-8 mb-3 p-30 mo-p20" style="display: none;" id="bebee-ad-container-">
                  <script type="text/javascript" charset="utf-8">
                     __getBebeeAds({
                         "partner_id": '6658188059',
                         "site_id": 'melga.bebee.com',
                         "search_term": 'Alternance Développeur web Laravel / Vue.js - Cergy ',
                         "search_location": 'Cergy',
                         "search_country": 'fr',
                         "styled_ad": true,
                         "container": 'bebee-ad-container-',
                         "ad_number": 3
                     });
                  </script>
               </div>
               <!-- Relacionadas -->
               <ul class="list-group nf-job-list">
                  <!-- Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-03_9565120c7f27a675550b68fb9b8da9ee870bddacd9677f673a7632d9b3d800b9')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="iscod alternance" class="rounded-circle" height="60px"
                              src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=oktogone-ultimate-fr&amp;amp;empname=iscod alternance&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur web Laravel / Vue.js - Cergy (F/H)" href="https://mfr.melga.com/job/2023-03-03_9565120c7f27a675550b68fb9b8da9ee870bddacd9677f673a7632d9b3d800b9">Alternance Développeur web Laravel / Vue.js - Cergy (F/H)</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Talent FR Sponsored - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 6 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>iscod alternance</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Cergy, Île-de-france</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0"> Description :  L’iSCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, spécialisée dans le développement de solutions Web sur</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-03_790fdba3e1d079aa52593c36730b521b3fbd7e6d8bdf3972b21f32798087eede')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="iscod alternance" class="rounded-circle" height="60px"
                              src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=oktogone-ultimate-fr&amp;amp;empname=iscod alternance&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur web - Bry" href="https://mfr.melga.com/job/2023-03-03_790fdba3e1d079aa52593c36730b521b3fbd7e6d8bdf3972b21f32798087eede">Alternance Développeur web - Bry</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Talent FR Sponsored - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 6 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>iscod alternance</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Bry-sur-marne, Île-de-france</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0"> Description :  L’ISCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, une agence digitale qui couvre l’ensemble des besoins </p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-06_86f445c31e8c7367123836b64e60c4f208bc49eb9bc1eecf7e8ccba4af075284')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="ISCOD" class="rounded-circle" height="60px"
                              src="https://resources-uzoes.s3.us-west-2.amazonaws.com/img/letters/I.png">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur web - Bry" href="https://mfr.melga.com/job/2023-03-06_86f445c31e8c7367123836b64e60c4f208bc49eb9bc1eecf7e8ccba4af075284">Alternance Développeur web - Bry</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Monster JB FR - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 3 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>ISCOD</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Bry-sur-marne</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0">L’ISCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, une agence digitale qui couvre l’ensemble des besoins en communication numérique des entreprises, un</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-06_502a2b87baafc9a2291f83dcb34f3bbb3eb806ed3f45a3648c31d2eace2062a5')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="MyCommunIT" class="rounded-circle" height="60px"
                              src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=candiquest-ats-prog&amp;amp;empname=MyCommunIT&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Développeur PHP Laravel &amp; JS React H/F" href="https://mfr.melga.com/job/2023-03-06_502a2b87baafc9a2291f83dcb34f3bbb3eb806ed3f45a3648c31d2eace2062a5">Développeur PHP Laravel &amp; JS React H/F</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Talent FR Sponsored - <span class="lnr lnr-calendar-full mr-1"></span> 
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
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0"> fulltime  Nous recherchons pour un organisme international un.e  Ingénieur.e Développement PHP Laravel et JavaScript React h/f  pour un poste en  CDI  situé</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-06_0de9561137d4344afdd534ec7029edb6dc0d1e88a82f75213c886d16eb644eee')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="ISCOD" class="rounded-circle" height="60px"
                              src="https://resources-uzoes.s3.us-west-2.amazonaws.com/img/letters/I.png">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur(se) Web - Clichy (F/H)" href="https://mfr.melga.com/job/2023-03-06_0de9561137d4344afdd534ec7029edb6dc0d1e88a82f75213c886d16eb644eee">Alternance Développeur(se) Web - Clichy (F/H)</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Monster JB FR - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 3 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>ISCOD</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Clichy</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0">L’ISCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire spécialiste de la réalité virtuelle, un(e) Développeur(se) Web en contrat d&#39;apprentissage, pour prépa</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-04_edde83e223b5c45ffffcf3a655280aaecc980d44eb74362e1727eeaf8eb56e2a')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="iscod alternance" class="rounded-circle" height="60px"
                              src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=oktogone-ultimate-fr&amp;amp;empname=iscod alternance&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur(se) Web - Clichy (F/H)" href="https://mfr.melga.com/job/2023-03-04_edde83e223b5c45ffffcf3a655280aaecc980d44eb74362e1727eeaf8eb56e2a">Alternance Développeur(se) Web - Clichy (F/H)</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Talent FR Sponsored - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 5 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>iscod alternance</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Clichy, Île-de-france</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0"> Description :  L’ISCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire spécialiste de la réalité virtuelle,  un(e) Développe</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-08_b15253b40a20f01e24098b3d957da28b393586f029d40c3576b3f744d26f2c73')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="ISCOD" class="rounded-circle" height="60px"
                              src="https://resources-uzoes.s3.us-west-2.amazonaws.com/img/letters/I.png">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Alternance Développeur WEB - Charenton" href="https://mfr.melga.com/job/2023-03-08_b15253b40a20f01e24098b3d957da28b393586f029d40c3576b3f744d26f2c73">Alternance Développeur WEB - Charenton</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Monster JB FR - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 1 jour
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>ISCOD</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Charenton-le-pont</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0">L’ISCOD, spécialiste de la formation en Digital Learning, recherche pour son entreprise partenaire, un Développeur WEB en alternance pour préparer l&#39;une de nos formations diplômantes reconnues par l&#39;E</p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <!-- Job item -->
                  <li class="nf-job list-group-item  mb-3"  onclick="goTo('https://mfr.melga.com/job/2023-03-06_562636d92f5fe634633e47c84e10cb7372fe9a745bb1b7336952de4d52ce4a45')">
                     <div class="d-flex align-items-center">
                        <div class="logo-bus-tr mr-3">
                           <img alt="MyDigitalSchool" class="rounded-circle" height="60px"
                              src="https://cdn-dynamic.talent.com/ajax/img/get-logo.php?empcode=my-digital-school-saint-quentin-fr&amp;amp;empname=MyDigitalSchool&amp;amp;v=024">
                        </div>
                        <div class="d-flex flex-column justify-content-center">
                           <h2 class="mb-0"><a title="Développeur Web (H/F) en alternance" href="https://mfr.melga.com/job/2023-03-06_562636d92f5fe634633e47c84e10cb7372fe9a745bb1b7336952de4d52ce4a45">Développeur Web (H/F) en alternance</a></h2>
                           <p class="text-muted mt-0 mb-0">
                              <small>Origine: Talent FR Sponsored - <span class="lnr lnr-calendar-full mr-1"></span> 
                              Il y a 3 jours
                              </small>
                           </p>
                        </div>
                     </div>
                     <hr>
                     <div class="nf-job-list-desc mt-4">
                        <div class="nf-job-list-info d-flex flex-wrap mb-2 ">
                           <span><i class="lnr lnr-briefcase mr-2"></i>MyDigitalSchool</span>
                           <span><i class="lnr lnr-map-marker mr-2"></i>Élancourt, Île-de-france</span>
                           <!-- <span><i class="lnr lnr-laptop-phone mr-2"></i>Remote</span>
                              <span><i class="lnr lnr-license mr-2"></i>Freelance</span> -->
                           <span><i class="lnr lnr-clock mr-2"></i>Full Time</span>
                        </div>
                        <p class="mb-0"> MyDigitalSchool Saint-Quentin-en-Yvelines recherche un développeur Web en alternance, pour le compte d’une entreprise partenaire.  Le poste est à pourvoir, en contrat d&#39;apprentissage, dans le </p>
                     </div>
                  </li>
                  <!-- /Job item -->
                  <script type="text/javascript">
                     function goTo(url){
                         window.location.href = url;
                     }
                  </script>
                  <!-- /Job item -->
               </ul>
               <!-- / Relacionadas -->
            </div>
         </div>
         <!-- /Left -->
         <!-- Right -->
         <div class="col-lg-4 px-lg-2">
            <!-- <div class="mobile-row-minus">
               <div class="card-tr search-apply-box job-details-ins-tr br-8 p-4 mb-3">
                   <h3 class="mb-3">Alternance Développeur web Laravel / Vue.js - Cergy </h3>
                   <p><span class="lnr lnr-map-marker mr-2"></span> Cergy</p>
                   <p class="mb-0"><span class="lnr lnr-briefcase mr-2"></span>
                       ISCOD</p>
                   <hr class="d-none d-sm-block">
                   <a href="#" data-toggle="modal" data-target="#applyModal"
                       class="btn btn-primary btn-lg btn-block mb-fixed-tr mt-4">
                       S'inscrire</a>
               </div>
               </div> -->
         </div>
         <!-- / Right -->
      </div>
   </div>
   <!-- Modal report -->
   <div class="modal fade" id="reportJobModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <h5 class="modal-title" id="exampleModalLabel">Signaler cet emploi</h5>
               <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
               </button>
            </div>
            <div class="modal-body">
               <form class="form-report" id="report_job_form">
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="exampleRadios1"
                           value="Contenido ofensivo o inapropiado.">
                        <label class="form-check-label" for="exampleRadios1">
                        Contenu inapproprié ou offensant
                        </label>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="exampleRadios2"
                           value="Oferta falsa o estafa.">
                        <label class="form-check-label" for="exampleRadios2">
                        Faux emploi ou escroquerie
                        </label>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="exampleRadios3"
                           value="Oferta caducada.">
                        <label class="form-check-label" for="exampleRadios3">
                        Emploi expiré
                        </label>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="incorrect_info_radio"
                           value="Informacion incorrecta.">
                        <label class="form-check-label" for="incorrect_info_radio">
                        Informations erronées
                        </label>
                     </div>
                     <div id="incorrect_info_sub_radios" class="sub_radios">
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios"
                              id="incorrect_info_sub_radio_1"
                              value="Informacion incorrecta: En el nombre de la empresa.">
                           <label class="form-check-label" for="incorrect_info_sub_radio_1">
                           Dans le nom de l'entreprise
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios"
                              id="incorrect_info_sub_radio_2"
                              value="Informacion incorrecta: En la descripcion.">
                           <label class="form-check-label" for="incorrect_info_sub_radio_2">
                           Dans la description
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios"
                              id="incorrect_info_sub_radio_3"
                              value="Informacion incorrecta: En la ubicacion.">
                           <label class="form-check-label" for="incorrect_info_sub_radio_3">
                           Dans l'emplacement
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios"
                              id="incorrect_info_sub_radio_4"
                              value="Informacion incorrecta: En el logo.">
                           <label class="form-check-label" for="incorrect_info_sub_radio_4">
                           Dans le logo
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios"
                              id="incorrect_info_sub_radio_5"
                              value="Informacion incorrecta: En el titulo.">
                           <label class="form-check-label" for="incorrect_info_sub_radio_5">
                           Dans le titre
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="cannot_submit"
                           value="No puedo aplicar a la oferta.">
                        <label class="form-check-label" for="cannot_submit">
                        Impossible de soumettre la demande
                        </label>
                     </div>
                     <div id="cannot_submit_sub_radios" class="sub_radios">
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios" id="cannot_submit_sub_radio_1"
                              value="No puedo aplicar a la oferta: Por un error en Melga.">
                           <label class="form-check-label" for="cannot_submit_sub_radio_1">
                           Parce qu'il y a un bug dans <strong>Melga</strong>
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios" id="cannot_submit_sub_radio_2"
                              value="No puedo aplicar a la oferta: Por un error en Monster JB FR.">
                           <label class="form-check-label" for="cannot_submit_sub_radio_2">
                           Parce qu'il y a un bug dans <strong>Monster JB FR</strong>
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios" id="cannot_submit_sub_radio_3"
                              value="No puedo aplicar a la oferta: Por que no cumplo con los requisitos del empleo.">
                           <label class="form-check-label" for="cannot_submit_sub_radio_3">
                           Parce que je ne réponds pas à toutes les exigences du poste
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios" id="cannot_submit_sub_radio_4"
                              value="No puedo aplicar a la oferta: Hay un problema adjuntando un archivo.">
                           <label class="form-check-label" for="cannot_submit_sub_radio_4">
                           Il y a un problème avec le fichier qui doit être joint.
                           </label>
                        </div>
                        <div class="form-check ml-5 mt-1">
                           <input class="form-check-input" type="radio" name="radios" id="cannot_submit_sub_radio_5"
                              value="No puedo aplicar a la oferta: Hay un problema con el login.">
                           <label class="form-check-label" for="cannot_submit_sub_radio_5">
                           Il y a un problème avec ma connexion
                           </label>
                        </div>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="not_a_job_offer"
                           value="No es una oferta de empleo.">
                        <label class="form-check-label" for="not_a_job_offer">
                        Pas une offre d'emploi
                        </label>
                     </div>
                  </div>
                  <div class="form-group mb-2 parent_radio">
                     <div class="form-check">
                        <input class="form-check-input" type="radio" name="radios" id="no_consent"
                           value="Soy representante de la empresa y no he dado mi consentimiento.">
                        <label class="form-check-label" for="no_consent">
                        Je suis un représentant de l'entreprise et je n'ai pas donné mon accord pour que mes emplois soient ici.
                        </label>
                     </div>
                     <div id="no_consent_sub_radios" class="sub_radios">
                        <div class="form-group ml-5 mt-1">
                           <label for="no_consent_email">Email:</label><br>
                           <input class="form-control" type="email" id="no_consent_email" name="email">
                        </div>
                        <div class="form-group ml-5 mt-1">
                           <label for="no_consent_reason">Raison:</label><br>
                           <textarea class="form-control" id="no_consent_reason" name="reason" minlength="40"></textarea>
                        </div>
                     </div>
                  </div>
                  <div class="modal-footer">
                     <button id="report_job_submit" type="submit"
                        class="btn btn-primary btn-lg">Envoyer</button>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

</main>

</x-home-layout>

