<!DOCTYPE html>
<html lang="fr" >
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Styles/style.css">
    <link rel="icon" href="Ressources/AC2FL.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>AC2FL - Aéroclub de Frotey-Les-Lure</title>
    <title>Formulaire d'adhésion</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container-fluid">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- Ajout d'une icône Bootstrap -->
                <span class="navbar-toggler-icon"></span>
            </button>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">
            <img class="logo"src="Ressources/AC2FL.png" alt="Logo" width="50" height="50">
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#acti"><p class="p-nav-btn">Nos Activités</p></a>
        </li>

        <li class="nav-item ">
          <a class="nav-link " href="#catégorie"><p class="p-nav-btn">
            Catégories d'ULM
            </p></a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"></a></li>
            <li><a class="dropdown-item" href="#"></a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"></a></li>
          </ul>
        </li>
        <div class="nav-btn">
        <li class="nav-item">
          <a class="nav-link" href="#moyens"><p class="p-nav-btn">Les Moyens Pédagogiques</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#equipe"><p class="p-nav-btn">L'Équipe</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#evenement"><p class="p-nav-btn">Évènements</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#tarifs"><p class="p-nav-btn">Tarifs</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#localisation"><p class="p-nav-btn">Localisation</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#formulaire"><p class="p-nav-btn">Devenir adhérent</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#footer"><p class="p-nav-btn">Contact</p></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="login.php" ><p class="p-nav-btn"><i class="ri-user-fill"></i></p></a>
        </li>
        </div>
        
      </ul>

      <form class="d-flex">
      <button type="button" class="btn btn-dark" id="toggleBtn">
                            <!-- Utilisation du texte unicode pour les icônes -->
                            🌙 Mode Sombre
                        </button>
      <iframe id="widget_autocomplete_preview"  width="300" height="50" frameborder="0" src="https://meteofrance.com/widget/prevision/702600##081178"> </iframe>
      </form>
    </div>
  </div>
</nav>


  
  <section style="height:80px;"></section>
  <div class="row" style="text-align:center;">
    <!-- Contenu de la page... -->
  </div>
  
    
  <section style="height:80px;"></section>
  <div class="row" style="text-align:center;">
    <!-- Contenu de la page... -->
  </div>
  <div>
  <h1 class="txt_fin"> Bienvenue sur la page d'AC2FL !</h1>
        </div>
        <section class="ciel stay transparent">
            <div class="title">
                <span class="serif">AC2FL</span> <span class="bold">Aéroclub</span>
            </div>
            <div class="nuage plan_3"></div>
            <div class="nuage plan_2"></div>
            <div class="nuage plan_1"></div>
            <div class="avion">
                <div class="helice"></div>
                <div class="flux_air flux_1"></div>
                <div class="flux_air flux_2"></div>
                <div class="flux_air flux_3"></div>
                <div class="flux_air flux_4"></div>
            </div>
        </section>

        <section class="container dark">
            <div class="row" style="padding: 80px 0;">
                
            </div>
        </section>

     
      <div class="container-fluid p-0" data-section="slide03">
    <div id="blog-carousel" class="carousel slide" data-ride="carousel" data-bs-ride="carousel">

        <!-- Ajout des classes "carousel-sm" pour un carrousel plus petit -->
        <div class="carousel-inner carousel-sm">
            <div class="carousel-item active">
                <!-- Ajout des classes "img-fluid" pour rendre l'image réactive et "h-100" pour la hauteur maximale -->
                <img src="Ressources/avion1.jpg" class="d-block w-100 img-fluid h-100" alt="avion1">
                <!-- Ajout d'un div pour le texte avec les classes "carousel-caption" pour le style de Bootstrap -->
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animate__animated animate__fadeIn">Bienvenue dans notre association</h3>
                    <p class="animate__animated animate__fadeIn">Aéroclub de Frotey-Lès-Lure</p>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Utilisation des classes "img-fluid" et "h-100" pour l'image -->
                <img src="Ressources/avion2.jpg" class="d-block w-100 img-fluid h-100" alt="avion2">
                <!-- Ajout d'un div pour le texte avec les classes "carousel-caption" pour le style de Bootstrap -->
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animate__animated animate__fadeIn">Pratiquez l'aviation légère dans un environnement exeptionnel</h3>
                  <a href="#tarifs">  <button type="button" class="btn btn-secondary">Voir tarifs</button>  </a>
                </div>
            </div>
            <div class="carousel-item">
                <!-- Utilisation des classes "img-fluid" et "h-100" pour l'image -->
                <img src="Ressources/avion3.jpg" class="d-block w-100 img-fluid h-100" alt="avion3">
                <!-- Ajout d'un div pour le texte avec les classes "carousel-caption" pour le style de Bootstrap -->
                <div class="carousel-caption d-none d-md-block">
                    <h3 class="animate__animated animate__fadeIn">Notre équipe est prête à vous accueillir</h3>
                    <a href="#equipe">  <button type="button" class="btn btn-secondary">Voir l'équipe</button>  </a>
                </div>
            </div>
        </div>

        <a class="carousel-control-prev" href="#blog-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
   
        </a>
        <a class="carousel-control-next" href="#blog-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
        
        </a>
    </div>
</div>

      
      
      

      <div class="container my-5 mx-auto">
    <div class="row text-center">
        <div class="col-md-6">
            <h2 class="titres" id="acti">Nos activités</h2>
            <p>
                L'aéro-club est une association loi 1901, agréée Jeunesse et Sports, adhérente à la FFULM (Fédération Française d'ULM). Elle est enregistrée sous le numéro 04674 et agréée sous le numéro AS70986858. Son siège social est situé au 62, avenue de la République, 70200 Lure.
            </p><br>
        </div>
        <div class="col-md-6" data-bs-theme="dark" >
            <ul class="list-group">
                <li class="list-group-item">Formation de pilotes et d'instructeurs</li>
                <li class="list-group-item">Baptêmes de l'air</li>
                <li class="list-group-item">Maintenance des ULM (moteur, structure)</li>
                <li class="list-group-item">Montage des ULM et de tout instrument de navigation (compas, radio, transpondeur)</li>
                <li class="list-group-item">Service de restauration rapide</li>
                <li class="list-group-item">Hébergement (trois studios et six chambres pour les élèves stagiaires)</li>
                <li class="list-group-item">Location d'emplacement ULM dans des hangars pour les particuliers</li>
            </ul>
        </div>
    </div>
</div>

      
      <h1 class="titres" id="catégorie"> Les catégories d'ULM</h1>
      <hr>

      <div  class="container" data-bs-theme="dark" >
      <div class="row justify-content-center mt-6">
            <!-- First Card -->
            <div class="col-md-3 mb-6">
                <div class="card" style="width: 18rem; height: 32.9rem;">
                    <img src="Ressources/autogire.jpg" class="card-img-top" alt="image autogire">
                    <div class="card-body">
                        <h5 class="card-title">L’autogire ultraléger</h5>
                        <span class="badge rounded-pill text-bg-success">Disponible</span> <br>

                        <p class="card-text">Appareil volant dont le rotor assure la sustentation (et non la propulsion, comme dans l'hélicoptère).</p>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight4" aria-controls="offcanvasRight4">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight4" aria-labelledby="offcanvasRightLabel4">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel4">L’autogire ultraléger</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un autogire ultra-léger répond aux
                                conditions techniques suivantes :
                                k La puissance maximale continue est inférieure ou
                                égale à 102 cv. pour les monoplaces et 122 cv. pour
                                les biplaces. La vitesse minimum de vol est inférieure
                                ou égale à 65 km/h.
                                k La masse maximale est inférieure ou égale à 300 kg
                                pour les monoplaces et à 450 kg pour les biplaces.
                                k La charge rotorique à la masse
                                maximale est comprise entre
                                4,5 et 12kg/m2
                                .
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    
            <!-- Second Card -->
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="Ressources/pendulaire.jpg" class="card-img-top" alt="image pendulaire">
                    <div class="card-body">
                        <h5 class="card-title">Le pendulaire</h5>
                        <span class="badge rounded-pill text-bg-success">Disponible</span> <br>

                        <p class="card-text">Un ULM pendulaire est un aéronef sustenté par une voilure rigide sous laquelle est généralement accrochée un chariot motorisé.</p>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight2" aria-controls="offcanvasRight2">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight2" aria-labelledby="offcanvasRightLabel2">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel2">Le pendulaire</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un ULM pendulaire est un aéronef sustenté par une
                                voilure rigide sous laquelle est généralement accroché un chariot motorisé. Il répond aux conditions
                                techniques suivantes :
                                La puissance maximale continue est inférieure ou
                                égale à 81 cv. pour les monoplaces et 102 cv.
                                pour les biplaces. La vitesse minimum de vol est
                                inférieure ou égale à 65 km/h.
                                La masse maximale est inférieure ou égale à 300
                                kg pour les monoplaces et à 450 kg pour les
                                biplaces. Ces masses peuvent être augmentées
                                de 5% dans le cas où l'ULM est équipé d'un
                                parachute de secours et de 10 % dans le cas ou
                                l'ULM est équipé de flotteurs. Ces augmentations
                                ne sont pas cumulables.
                                La vitesse de décrochage est inférieure ou égale
                                à 65 km/h ou la charge alaire à la masse maxi-
                                male est inférieure à 30kg/m 2
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Third Card -->
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem; height: 32.9rem;">
                    <img src="Ressources/multiaxes.jpg" class="card-img-top" alt="image multiaxes">
                    <div class="card-body">
                        <h5 class="card-title">Le multiaxes</h5>
                        <span class="badge rounded-pill text-bg-success">Disponible</span> <br>

                        <p class="card-text">Un ULM multiaxes est un aéronef sustenté par
                            une voilure fixe.</p><br><br>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight3" aria-controls="offcanvasRight3">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight3" aria-labelledby="offcanvasRightLabel3">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel3">Le multiaxes</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un ULM multiaxes est un aéronef sustenté par
                                une voilure fixe. Il répond aux conditions techniques suivantes :
                                k La puissance maximale continue est inférieure
                                ou égale à 81 cv. pour les monoplaces et 102
                                cv. pour les biplaces. La vitesse minimum de
                                vol est inférieure ou égale à 65 km/h.
                                k La masse maximale est inférieure ou égale à
                                300 kg pour les monoplaces et à 450 kg pour
                                les biplaces. Ces masses peuvent être aug-
                                mentées de 5% dans le cas où l'ULM est équi-
                                pé d'un parachute de secours et de 10 % dans
                                le cas ou l'ULM est équipé de flotteurs. Ces
                                augmentations ne sont pas cumulables.
                                k La vitesse de décrochage est inférieure ou
                                égale à 65 km/h ou la charge alaire à la masse
                                maximale est inférieure à 30kg/m2.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center mt-4">
            <!-- Fourth Card -->
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;  height: 38.8rem;">
                    <img src="Ressources/paramoteur.jpg" class="card-img-top" alt="image paramoteur">
                    <div class="card-body">
                        <h5 class="card-title">Le paramoteur</h5>
                        <span class="badge rounded-pill text-bg-danger">Non disponible</span>

                        
                        <p class="card-text">Un ULM paramoteur est un aéronef sustenté par une voilure souple, de type parachute.</p><br><br><br><br><br>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight1" aria-controls="offcanvasRight1">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight1" aria-labelledby="offcanvasRightLabel1">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel1">Le paramoteur</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un ULM paramoteur est un aéronef sus-
                                tenté par une voilure souple, de type
                                parachute. Il répond aux conditions techniques suivantes :
                                La puissance maximale continue est
                                inférieure ou égale à 81 cv. pour les
                                monoplaces et 102 cv. pour les
                                biplaces. La vitesse minimum de vol
                                est inférieure ou égale à 65 km/h.
                                La masse maximale est inférieure ou
                                égale à 300 kg pour les monoplaces et
                                à 450 kg pour les biplaces.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Fifth Card -->
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem;">
                    <img src="Ressources/aerostat.jpg" class="card-img-top" alt="image aérostat">
                    <div class="card-body">
                        <h5 class="card-title">L’aérostat ultraléger</h5>
                        <span class="badge rounded-pill text-bg-danger">Non disponible</span>
                        <p class="card-text">Véhicule aérien sans moteur plus léger que l'air. Les aérostats ultra-légers sont caractérisés par leur poids extrêmement faible et leur capacité à rester en suspension dans l'air en exploitant la différence de densité entre l'hélium ou l'hydrogène.</p>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight5" aria-controls="offcanvasRight5">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight5" aria-labelledby="offcanvasRightLabel5">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel5">L’aérostat ultraléger</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un aérostat ultra-léger répond aux conditions
                                techniques suivantes :
                                k La puissance maximale continue est inférieure
                                ou égale à 102 cv. pour les monoplaces et 122
                                cv. pour les biplaces. La vitesse minimum de
                                vol est inférieure ou égale à 65 km/h.
                                k Le volume de l'enveloppe d'hélium est inférieur
                                ou égal à 900 m3.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Sixth Card -->
            <div class="col-md-3 mb-4">
                <div class="card" style="width: 18rem; height: 38.8rem;">
                    <img src="Ressources/helico.jpg" class="card-img-top" alt="image hélico ultraléger">
                    <div class="card-body">
                        <h5 class="card-title">L’hélicoptère ultraléger</h5>
                        <span class="badge rounded-pill text-bg-danger">Non disponible</span>
                        <p class="card-text">L'hélicoptère ultra léger est un hélico monomoteur dont la puissance maximale est inférieure ou égale à 116 CV (monoplace) ou à 143 CV (biplaces).</p><br><br><br>
                        <button class="btn btn-secondary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight6" aria-controls="offcanvasRight6">En savoir plus</button>
    
                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight6" aria-labelledby="offcanvasRightLabel6">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasRightLabel6">Offcanvas right</h5>
                                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                            </div>
                            <div class="offcanvas-body small">
                                Un hélico ultra-léger répond aux conditions
                                techniques suivantes :
                                k La puissance maximale continue est inférieure
                                ou égale à 109 cv. pour les monoplaces et 136
                                cv. pour les biplaces. La vitesse minimum de
                                vol est inférieure ou égale à 65 km/h.
                                k La masse maximale est inférieure ou égale à
                                300 kg pour les monoplaces et à 450 kg pour
                                les biplaces.
                                k La charge rotorique à la masse maximale est
                                comprise entre 4,5 et 12kg/m2.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <main>
      <section>
        <h1 class="titres" id ="moyens">Nos moyens pédagogiques</h1>
        <h3>Un aérodrome privé avec la possibilité d'un hébergement dans un environnement exceptionnel</h3>
        <hr>
       
        
      </section>
      
      <div class="container text-center mt-5" data-bs-theme="dark" >
        <div class="accordion" id="accordionPanelsStayOpenExample" style="max-width: 1000px; margin: 0 auto;">
            <!-- First Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Une surface totale de 45 hectares dégagés
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/baseulm.jpg" alt="image base ulm"> <br> <br>Explorez un espace aérien expansif qui offre une liberté totale pour les passionnés d'aviation. Notre domaine offre des possibilités infinies pour les pilotes, des décollages sans contraintes aux manœuvres aériennes créatives.

Avec une surface totale de 45 hectares, notre site vous permet d'embrasser le ciel avec une perspective nouvelle et excitante. Que vous soyez débutant ou pilote expérimenté, notre domaine spacieux crée un environnement idéal pour perfectionner vos compétences et vivre des aventures aériennes mémorables.
                    </div>
                </div>
            </div>
    
            <!-- Second Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                        Deux pistes en X de 800 et 450 m
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/piste.jpg"  alt="image piste"> <br> <br> Avec des pistes de 800 et 450 mètres formant une configuration en X, notre site fournit des options diversifiées pour des décollages et atterrissages en toute sécurité.

Cette disposition unique offre aux pilotes une flexibilité inégalée pour s'adapter à diverses conditions météorologiques et préférences de vol. Que vous soyez un novice cherchant à perfectionner vos compétences ou un pilote chevronné en quête de défis, nos deux pistes en X sont conçues pour répondre à toutes les aspirations aéronautiques.
                    </div>
                </div>
            </div>
    
            <!-- Third Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                        Un hydrosurface de 8 hectares
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/hydrosurface.jpg"  alt="imagehydrosurface"> <br>  <br> Explorez un espace idyllique où la piste d'eau s'étend sur 8 hectares, offrant des opportunités passionnantes pour les pilotes d'hydravions et d'ULM amphibies.

Notre site exceptionnel vous permet de combiner la magie du vol avec l'adrénaline de l'atterrissage sur l'eau. Avec des installations modernes et un environnement naturel exceptionnel, notre hydrosurface crée une expérience inoubliable pour les amateurs d'aviation aquatique.
                    </div>
                </div>
            </div>
    
            <!-- Fourth Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour" aria-expanded="false" aria-controls="panelsStayOpen-collapseFour">
                        Trois hangars avec surface couverte de 4300 m²
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFour">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/hangar.jpg"  alt="image hangar"> <br> <br> Nos trois hangars offrent une surface couverte de 4300 m², créant un espace ample et sécurisé pour le stockage et l'entretien de votre aéronef. Conçus pour répondre à divers besoins, ces hangars fournissent un refuge protecteur contre les intempéries et les éléments, assurant la préservation optimale de votre investissement. Avec un accès facile et rapide, notre équipe dédiée veille à la sécurité et à la fonctionnalité, offrant un environnement idéal pour les propriétaires d'ULM, d'avions légers et d'autres aéronefs.
                    </div>
                </div>
            </div>
    
            <!-- Fifth Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFive">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFive" aria-expanded="false" aria-controls="panelsStayOpen-collapseFive">
                        Locaux administratifs informatisés
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseFive" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingFive">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/admin.jpg"  alt="image administration"> <br>  <br>  Notre infrastructure moderne combine l'efficacité administrative avec la puissance de la technologie. Grâce à des installations informatisées, nous simplifions les processus, de l'inscription aux suivis de formation.

Dans nos locaux administratifs, vous trouverez une équipe dévouée prête à vous guider à travers toutes les formalités, utilisant des systèmes informatisés pour assurer une gestion transparente et rapide. Que vous soyez étudiant, pilote ou visiteur, notre environnement administratif informatisé garantit une expérience fluide et sans tracas.
                    </div>
                </div>
            </div>
    
            <!-- Sixth Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSix">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSix" aria-expanded="false" aria-controls="panelsStayOpen-collapseSix">
                        Salle de cours multimédia avec simulateur de vol
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSix" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSix">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/simulateur.jpg" alt="image administration"> <br> Découvrez une expérience d'apprentissage exceptionnelle dans notre salle de cours multimédia équipée d'un simulateur de vol ultramoderne. Grâce à des cours interactifs et des séances de simulation réalistes, vous développerez vos compétences de pilotage avec confiance.
                    </div>
                </div>
            </div>
    
            <!-- Seventh Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingSeven">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseSeven" aria-expanded="false" aria-controls="panelsStayOpen-collapseSeven">
                        Un atelier d'entretien et de réparation
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseSeven" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingSeven">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/atelier.jpg" alt="image atelier réparation"> <br> <br> Explorez notre atelier d'entretien et de réparation dédié aux ULM, offrant une expertise technique pour garantir la fiabilité et la performance optimale de votre aéronef ! Avec des installations modernes et une équipe qualifiée, nous sommes engagés à fournir des services d'entretien de première classe pour répondre à tous vos besoins.

Notre atelier est équipé pour traiter une gamme variée de travaux, de l'entretien régulier aux réparations plus complexes. Nous comprenons l'importance de la sécurité et de la qualité, et notre équipe d'experts s'assurera que votre ULM est toujours prêt à prendre les airs en toute confiance.
                    </div>
                </div>
            </div>
    
            <!-- Eighth Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingEight">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseEight" aria-expanded="false" aria-controls="panelsStayOpen-collapseEight">
                        Des capacités d'accueil et de restauration sur place
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseEight" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingEight">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/resto.jpg" alt="image restauration">  <br> <br> Profitez de nos capacités d'accueil et de restauration sur place, ajoutant une dimension confortable à votre expérience aéronautique ! Notre site est équipé pour vous offrir un espace accueillant où vous pourrez vous détendre, socialiser et savourer des moments après vos vols.

Avec des installations de restauration sur place, nous veillons à ce que vous puissiez apprécier une variété de repas et de rafraîchissements sans quitter le site. Que vous soyez pilote, étudiant ou visiteur, nos capacités d'accueil créent une atmosphère conviviale où vous pouvez partager des anecdotes, échanger des expériences et célébrer votre passion commune pour l'aviation.
                    </div>
                </div>
            </div>
    
            <!-- Ninth Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingNine">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseNine" aria-expanded="false" aria-controls="panelsStayOpen-collapseNine">
                        Connexion WIFI gratuit sur toute la base
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseNine" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingNine">
                    <div class="accordion-body">
                    <img class="infrastructure" src="Ressources/wifi.jpg" alt="image wifi">  <br> <br> Profitez de la connectivité totale avec notre connexion Wi-Fi gratuite disponible sur toute la base ! Que vous soyez un étudiant en pause entre les cours, un pilote en attente de son vol, ou un visiteur explorant nos installations, notre réseau Wi-Fi gratuit vous permet de rester connecté où que vous soyez sur la base.
                    </div>
                </div>

                 <!-- Ten Accordion Item -->
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTen">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTen" aria-expanded="false" aria-controls="panelsStayOpen-collapseTen">
                    Hébergement à la base ULM
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseTen" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTen">
                    <div class="accordion-body">
                    <h4>Appartement</h4>
                    <img class="infrastructure" src="Ressources/appart.jpg" alt="image appartement">  <br> <br> 
                    
                    <ul class="list-group">
                        <li class="list-group-item">Équipé d’une kitchenette, d’une salle de bain (lavabo, douche, W.C.), télévision, lit en 140</li>
                        <li class="list-group-item">Draps fournis.</li>
                        <li class="list-group-item">Électricité en plus (compteur individuel). Caution 100 euros.</li>
</ul>   <br>         
<button type="button" class="btn btn-secondary">Réserver</button>
<br> <br>


                    <h4>Chambre</h4>
                    <img class="infrastructure" src="Ressources/chambre.jpg" alt="image chambre">
                    <br> <br>
                    <ul class="list-group">
                      <li class="list-group-item">Équipée d’une salle de bain (lavabo, douche, W.C.), télévision, lit en 140</li>
                      <li class="list-group-item">Draps fournis.</li>
                      <li class="list-group-item">Caution 100 euros.</li>
                    </ul> <br>
                    <button type="button" class="btn btn-secondary">Réserver</button>



                    </div>
                </div>

            </div>
        </div>
    </div>
    
      
      
        <h1 class="titres" id="equipe">Notre Équipe</h1>
        <hr>
        <div class="container">

          <!-- Carte en haut -->
          <div class="row justify-content-center mt-4">
            <div class="card" style="width: 18rem;">
              <img src="Ressources/president.jpg" class="card-img-top" alt="Photo 1">
              <div class="card-body">
                <h5 class="card-title">Jacques ADIT</h5>
                <p class="card-text">Président</p>
              </div>
            </div>
          </div>
        
          <!-- Quatre cartes au centre -->
          <div class="row justify-content-center mt-4">
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/mecanicien.jpg" class="card-img-top" alt="Photo 2">
                <div class="card-body">
                  <h5 class="card-title">Igor CLEPLATTE</h5>
                  <p class="card-text">Mécanicien</p>
                </div>
              </div>
            </div>
          
            
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/kevin.jpg" class="card-img-top" alt="Photo 3">
                <div class="card-body">
                  <h5 class="card-title">Kévin SAITOUT</h5>
                  <p class="card-text">Chef Pilote</p>
                </div>
              </div>
            </div>
        
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/secretaire.jpg" class="card-img-top" alt="Photo 4">
                <div class="card-body">
                  <h5 class="card-title">Céline LAPLUME</h5>
                  <p class="card-text">Secrétaire</p>
                </div>
              </div>
            </div>
        
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/tresoriere.jpg" class="card-img-top" alt="Photo 5">
                <div class="card-body">
                  <h5 class="card-title">Claudine MONET</h5>
                  <p class="card-text">Trésorière</p>
                </div>
              </div>
            </div>
        
          </div>
        
          <!-- Deux cartes en bas -->
          <div class="row justify-content-center mt-4">
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/justine.jpg" class="card-img-top" alt="Photo 6">
                <div class="card-body">
                  <h5 class="card-title">Justine VOLAVU</h5>
                  <p class="card-text">Pilote ULM <br>Institutrice</p>
                </div>
              </div>
            </div>
          
            <!-- Ajout de la dernière carte -->
            <div class="col-md-3">
              <div class="card" style="width: 18rem;">
                <img src="Ressources/alain.jpg" class="card-img-top" alt="Photo 7">
                <div class="card-body">
                  <h5 class="card-title">Alain STRUMENT</h5>
                  <p class="card-text">Pilote ULM<br>Instructeur</p>
                </div>
              </div>
            </div>
          
          </div> <br> <br>
         
          <h1 class="titres" id="evenement">Évènements ULM</h1>
          <hr>

          <div  class="container" data-bs-theme="dark" >
      <div class="row justify-content-center mt-8">
            <!-- First Card -->
            <div class="col-md-4 mb-6">
                <div class="card" style="width: 22rem; height: 38rem;">
                <a  href="https://mondialulm.fr/fr/">  <img src="Ressources/event1.png" class="card-img-top" alt="image evenement"></a>
                    <div class="card-body">
                        <h5 class="card-title">Mondial de l'ULM 2023 à Blois</h5>
                      <br>

                        <p class="card-text"> Le Salon mondial de l'ULM 2023 a marqué un moment mémorable, rassemblant l'élite de l'aviation légère pour présenter les dernières innovations, technologies et tendances, offrant ainsi une vision passionnante de l'avenir de l'aviation légère à l'échelle mondiale.</p>
                        <a  href="https://mondialulm.fr/fr/"> <button class="btn btn-secondary" type="button" >En savoir plus</button></a>
    
                       
                    </div>
                </div>
            </div>
        
    
            <!-- Second Card -->
            <div class="col-md-4 mb-6">
                <div class="card" style="width: 22rem; height: 38rem;">
                <a  href="https://www.vosgesmatin.fr/vosges/2013/07/28/envolee-d-ulm-a-remomeix"> <img src="Ressources/event2.jpg" class="card-img-top" alt="évènement ulm à Remomeix" /> </a>
                    <div class="card-body">
                        <h5 class="card-title">Envolée d’ULM à Remomeix </h5>
                        <br>

                        <p class="card-text">Rassemblant environ 300 participants, le « Tour ULM » a pris son départ hier matin à l’aérodrome. À l’issue de plusieurs escales en Allemagne, les pilotes seront de retour vendredi.</p><br><br>
                        <a  href="https://www.vosgesmatin.fr/vosges/2013/07/28/envolee-d-ulm-a-remomeix">  <button class="btn btn-secondary" type="button" >En savoir plus</button></a>
    
                        
                    </div>
                </div>
            </div>
    
            <!-- Third Card -->
            <div class="col-md-4 mb-4">
                <div class="card" style="width: 22rem; height: 38rem;">
                <a href="https://www.lejsl.com/edition-macon/2018/07/21/le-tour-ulm-est-parti-de-macon-ce-samedi-matin" > <img src="Ressources/event3.jpg" class="card-img-top" alt="tour ulm mâcon" /> </a>
                    <div class="card-body">
                        <h5 class="card-title">Le Tour ULM est parti de Mâcon ce samedi matin</h5>
                     
                        Près de 140 ULM - multiaxes, pendulaires et autogyres - participant au 23e  Tour ULM, organisé par la FFPLUM sont partis de l’aérodome de Mâcon, samedi matin. Après une semaine d’épreuves qui les mèneront en Belgique et sur les côtes normandes.</p><br>
                        <a href="https://www.lejsl.com/edition-macon/2018/07/21/le-tour-ulm-est-parti-de-macon-ce-samedi-matin" >   <button class="btn btn-secondary" type="button" >En savoir plus</button></a>
    
                      
                            
                    </div>
                </div>
            </div>
        </div>
                    </div>

         <!-- Prix Starts -->
	<section class="pricing" id="pricing">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
        <h1 class="titres" id="tarifs">Tarifs <span>abordables</h1>
        <br>
		<p>Découvrez la passion du vol à des prix accessibles !</p>
    <hr>
					
			
			
			<section class="container">
				<div class="row">
				  <div class="col-md-12">
					<div class="carousel slide" data-ride="carousel" id="carousel-formation">
					  
			  
					  <div class="carousel-inner">
						<div class="carousel-item active">
						  <div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							<h5 class="card-header bg-dark text-white">Stage d'initiation 180€</h5>
							<div class="card-body">
							  <h6 class="card-title text-center"></h6>
							  <ul class="list-unstyled">
								<li>Durée 3h</li>
								<li>Présentation de l'aéronef et notion de mécanique du vol</li>
								<li>Formation à pied ou en chariot</li>
								<li>Gonflage et pilotage d'un parapente au sol</li>
								<li>Comprend un vol de 20 mn en biplace</li>
							  </ul>
							  <button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>
							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							<h5 class="card-header bg-dark text-white">Brevet de pilote 1200€</h5>
							<div class="card-body">
							  <h6 class="card-title text-center"></h6>
							  <ul class="list-unstyled">
								<li>Validité 1 an</li>
								<li>Cours illimités</li>
								<li>Formation à pied ou en chariot</li>
								<li>Prêt du matériel</li>
								<li>10 vols minimum</li>							
								<li>Un cours de perfectionnement offert</li>
							  </ul>
							  <button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>

							</div>
						  </div>
						</div>
						<div class="carousel-item">
						  <div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							<h5 class="card-header bg-dark text-white">Emport de passager 450€</h5>
							<div class="card-body">
							  <h6 class="card-title text-center"></h6>
							  <ul class="list-unstyled">
								<li>Durée de 6 à 8h</li>
								<li>Évaluation préalable du pilote</li>
								<li>Formation à pied ou en chariot</li>
								<li>Avec le matériel du stagiaire</li>
								<li>4 vols minimum</li>
								<li>Sensibilisation aux facteurs humains</li>
							  </ul>
							  <button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>

							</div>
						  </div>
						</div>
						<div class="carousel-item">
							<div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							  <h5 class="card-header bg-dark text-white">Vol découverte 60€</h5>
							  <div class="card-body">
								<h6 class="card-title text-center"></h6>
								<ul class="list-unstyled">
								  <li>Vol découverte de 30 minutes</li>
								  <li>Balade Château de Chantilly</li>
								  <li>Essence comprise</li>
								  <li>Rendez-vous au 06.30.23.41.43</li>
								  <li>Possibilité de promenade à la carte</li>
								  
								</ul>
								<button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>

							  </div>
							</div>
						  </div>
						  <div class="carousel-item">
							<div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							  <h5 class="card-header bg-dark text-white">Membre 90€/heure</h5>
							  <div class="card-body">
								<h6 class="card-title text-center"></h6>
								<ul class="list-unstyled">
								  <li>Prix pour les 10 premières heures</li>
								  <li>Cotisation club: 105€</li>
								  <li>Cotisation moins de 25 ans à 60€</li>
								  <li>Assurance comprise</li>
								  <li>Avoir licence FFPLUM ou FFV</li>
								  
								</ul>
								<button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>

							  </div>
							</div>
						  </div>

						  <div class="carousel-item">
							<div class="card" style="width: 30rem; height: 18rem; margin: 0 auto;">
							  <h5 class="card-header bg-dark text-white">Membre +40 heures</h5>
							  <div class="card-body">
								<h6 class="card-title text-center"></h6>
								<ul class="list-unstyled">
								  <li>+10h = 75€/h</li>
								  <li>+20h = 71€/h</li>
								  <li>+30h = 67€/h</li>
								  <li>-25 ans = -20%</li>
								  <li>Avoir licence FFPLUM ou FFV</li>
								  
								</ul>
								<button class="btn btn-secondary" onclick="redirigerVersleFormulaire()"type="button">Réserver</button>
                <script>
    function redirigerVersleFormulaire() {
        
        window.location.href = "formulaire_membre.php";
    }
</script>

							  </div>
							</div>
						  </div>

					  </div>
			  
					  <a class="carousel-control carousel-control-prev bg-secondary "style="width:" href="#carousel-formation" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only"></span>
					  </a>
					  <a class="carousel-control carousel-control-next bg-secondary" href="#carousel-formation" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only"></span>
					  </a>
					</div>
	
	<!-- Map -->
  <h1 class="titres" id="localisation">Localisez Nous</h1>
        <br>
		<p>Notre association se situe à proximité de Frotey-Les-Lures</p>
    <hr>
	</div>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2687.500055775827!2d6.545493728266803!3d47.655289912740024!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479243ff7a705239%3A0x4d2f79be7103e0b6!2sA%C3%A9ro-club%20de%20Flotey-Les-Lures!5e0!3m2!1sfr!2sfr!4v1704562011553!5m2!1sfr!2sfr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				
		</div>
	</section>
	<!--Map Ends -->
  
  <link rel="stylesheet" href="Styles/form.css">
<div class="form-index">
  <h1 id="formulaire">ENVOLEZ-VOUS !</h1>
<?php

require_once("form.php");
require_once("formvalidator.php");

$form = new Form("traitement.php");

// Ajout des champs au formulaire
$form->addField("Civilité", "radio", "civilite", ["M.", "Mme."]);
$form->addField("Nom*", "text", "nom", ['required' => true]);
$form->addField("Prénom*", "text", "prenom", ['required' => true]);
$form->addField("Date de naissance", "date", "date_naissance");
$form->addField("Adresse", "text", "numero_rue");
$form->addField("Code postal", "number", "code_postal", ['placeholder' => 'code postal'] );
$form->addField("Ville", "text", "ville", ['placeholder' => 'Ville']);
$form->addField("Email*", "email", "email", ['required' => true]);
$form->addField("Téléphone portable", "tel", "telephone", ['pattern' => '[0-9]{10}', 'title' => 'Le numéro de portable doit comporter 10 chiffres']);
$form->addField("Activités demandées", "checkbox", "activites", ["Formation de pilote", "Baptême de l'air", "Réparation"]);

echo $form->getForm(); // Affiche le formulaire
?>
</div>


<div class="container">
  
  <section style="height:80px;"></section>
  <div class="row" style="text-align:center;">
    <!-- Contenu de la page... -->
  </div>
  <div class="container">
    
  <section style="height:80px;"></section>
  <div class="row" style="text-align:center;">
    <!-- Contenu de la page... -->
  </div>
  <div>
  <h1 class="txt_fin"> Vous êtes arrivé à destination !</h1>
        </div>
  <div class="containerbird">
  
  
  <div class="bird-container bird-container--one">
    <div class="bird bird--one"></div>
  </div>
  
  <div class="bird-container bird-container--two">
    <div class="bird bird--two"></div>
  </div>
  
  <div class="bird-container bird-container--three">
    <div class="bird bird--three"></div>
    
  </div>
  
  <div>
  <img src="Ressources/anim_avion3.gif" class="disp_interactif" alt="Avion">
        </div>
  <div class="bird-container bird-container--four">
    <div class="bird bird--four"></div>
    
  </div>
  
</div>

        <script>
        var enVol = false;
            function fly_away(){
                if(enVol === false && $(window).scrollTop() != 0){
                    enVol = true;
                    $('.ciel').removeClass('stay');
                    $('.ciel').addClass('away');

                    setTimeout(function(){ stay() }, 4000);
                }
            }
            function stay(){
                if(enVol === true){
                    enVol = false;
                    $('.ciel').removeClass('away');
                    $('.ciel').addClass('stay');
                }
            }

            $(document).ready(function(){
                fly_away();
                $(window).scroll(function() {
                    fly_away();
                });

            });
            </script>
  <!-- Footer -->
  <footer id="footer" class="footer-bs">
    <div class="row">
      <div class="col-md-3 footer-brand animated fadeInLeft">
        <img id="logofooter" src="Ressources/AC2FL.png" alt="logo"> <br>
        <br><p>Association enregistrée n°04674 - - Agrément n° AS70986858</p>
        <p>© 2024 Aéro-Club de Frotey-les-Lure appelé sous le terme ACF2L, Tous les droits réservés</p>
      </div>
      <div class="col-md-4 footer-nav animated fadeInUp">
        <h4 class="txt-footer-menu">Menu </h4>
        <div class="col-md-6">
          <ul class="pages">
            <li><a href="#acti">Nos activités</a></li>
            <li><a href="#catégorie">Catégories d'ULM</a></li>
            <li><a href="#moyens">Les Moyens Pédagogiques</a></li>
            <li><a href="#equipe">L'Équipe</a></li>
            <li><a href="#evenement">Évènements</a></li>
            <li><a href="#tarifs">Tarifs</a></li>
            <li><a href="#localisation">Localisation</a></li>
          </ul>
        </div>
        <div class="col-md-6">
          <ul class="pages">
            <!-- Liens modaux -->
            <li><a class="footer-title"href="#" data-toggle="modal" data-target="#aProposModal">À propos</a></li>
            <li><a class="footer-title"href="#" data-toggle="modal" data-target="#confidentialiteModal">Politique de confidentialité</a></li>
            <li><a class="footer-title"href="#footer">Contacts</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-2 footer-social animated fadeInDown">
        <h4>Suivez nous</h4>
        <ul>
          <!-- Liens vers les réseaux sociaux -->
          <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js"  crossorigin="anonymous"></script>
          <div class="rounded-social-buttons">
                    <a class="social-button facebook" href="https://www.facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a class="social-button twitter" href="https://www.twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a>
                    <a class="social-button linkedin" href="https://www.linkedin.com/" target="_blank"><i class="fab fa-linkedin"></i></a>
                    <a class="social-button youtube" href="https://www.youtube.com/" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a class="social-button instagram" href="https://www.instagram.com/" target="_blank"><i class="fab fa-instagram"></i></a>
                </div>
        </ul>
      </div>
      <div class="col-md-3 footer-ns animated fadeInRight">
        <h4>Localisation</h4>
        <p>62, Avenue de la République, 70200 Lure</p>
        <p>
        <a href="#localisation">  <button type="button" class="btn btn-secondary">Retrouvez-nous</button>  </a>
          </div>
        </p>
      </div>
    </div>
  </footer>

  <!-- Modal À propos -->
  <div class="modal fade" id="aProposModal" tabindex="-1" role="dialog" aria-labelledby="aProposModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="aProposModalLabel">À propos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenu du modal À propos... -->
          <p>L’Aéro-Club de Frotey-les-Lure appelé sous le terme ACF2L Il a pour origine la fusion de l’Aéro-Club de l’Ill siégeant à Vesoul et de l’Aéro-Club Marin-La-Meslée, siégeant à Frotey-les-Lure. au sein de l’Association des Aéro-Clubs de la Bourgogne-Franche-Comté.
L’aéro-club est une Association Loi 1901, agréée Jeunesse et Sports , adhérente à la FFULM ( Fédération Française d’ULM) . </p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal Politique de confidentialité -->
  <div class="modal fade" id="confidentialiteModal" tabindex="-1" role="dialog" aria-labelledby="confidentialiteModalLabel" aria-hidden="true" >
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confidentialiteModalLabel">Politique de confidentialité</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <!-- Contenu du modal Politique de confidentialité... -->
          <p>Les informations personnelles concernant les visiteurs de notre site sont confidentielles, y compris leur identité. Nous nous engageons sur l'honneur à respecter les conditions légales de confidentialité applicables en France et a ne pas divulguer ces informations à des tiers.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
        </div>
      </div>
    </div>
  </div>

</div>
<script src="https://cdn.websitepolicies.io/lib/cconsent/cconsent.min.js" defer></script><script>window.addEventListener("load",function(){window.wpcb.init({"border":"thin","corners":"small","colors":{"popup":{"background":"#222222","text":"#ffffff","border":"#b3d0e4"},"button":{"background":"#b3d0e4","text":"#000000"}},"content":{"message":"Le site web de l'Association AC2FL utilise des cookies pour améliorer votre expérience. En continuant à naviguer sur notre site, vous acceptez notre utilisation des cookies conformément à notre politique de cookies","link":"En savoir plus","button":"J'accepte"}})});</script>      
        
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="bootstrap.js"></script>
</body>
</html>

