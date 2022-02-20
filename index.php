<?php include "admin/connection.php";
if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email= $_POST['email'];
        $phone=$_POST['phone'];
         $na=$_POST['na'];
          $nk=$_POST['nk'];
           $date=$_POST['date'];
        $message=$_POST['message'];
        
       
        $sql = "INSERT INTO `enqury`( `name`, `email`, `phone`, `date`, `na`, `nk`, `message`) VALUES ('$name','$email','$phone','$date','$na','$nk','$message')";
        // print_r($sql);
        // die();
        $result = db_query($sql);
        
      
      

    }


?>

<!DOCTYPE html>
<html>

<head>
    <title>Italy Vacation Specialists</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link href="css/old.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <script src="js/owl.carousel.js"></script>
    <!-- font -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- font-family: 'Cormorant Garamond', serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300;400&display=swap" rel="stylesheet">
    <!-- font-family: 'Oswald', sans-serif; -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;700;800&display=swap" rel="stylesheet">
    <!-- fancybox -->
    <link rel="stylesheet" href="css/jquery.fancybox.min.css" />
    <script src="js/jquery.fancybox.min.js"></script>
     <style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  </style>
</head>

<body>
    <header class="header">
        <div class="container_full gre">
            <div class="container ">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle topmenu" data-toggle="collapse" data-target="#navbartop" aria-expanded="true" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div id="navbartop" class="navbar-collapse collapse in" aria-expanded="true" style="">
                    <ul class="nav navbar-nav top_nav">
                        <li>
                            <a href="mailto:team@italyvacationspecialists.com"><i class="fa fa-envelope" aria-hidden="true"></i> team@italyvacationspecialists.com</a>
                        </li>
                        <li><a href="https://www.italyvacationspecialists.com/italy-custom-holidays.html">Customized Packages</a></li>
                        <li><a href="About-italy.html">About Italy</a></li>
                        <li><a href="https://www.italyvacationspecialists.com/our-story.html">Our Story</a></li>
                        <!--<li><a href="our-team.php">Our Team</a></li>-->
                        <li class="dd"> <a href="travel-agents.html">Travel Agents</a> </li>
                        <li class="dd"> <a href="contact-us.html"> Contact Us </a> </li>
                        <li class="dd"><a href="https://www.italyvacationspecialists.com/blog">Blog</a></li>
                        <li class="dd"><a href="https://www.italyvacationspecialists.com/questionnaire_form.php">Trip Planning</a></li>
                        <li class="dd"><a href="https://www.italyvacationspecialists.com/faq-about-italy.html">FAQ</a></li>
                        <div class="search-form">
                            <a href="javascript:void(0)" data-toggle="collapse" data-target="#toggleForm"><i class="fa fa-search"></i></a>
                            <div id="toggleForm" class="collapse">
                                <form method="get" id="searchform" action="search.html">
                                    <div class="input-group">
                                        <input type="hidden" name="search_type" value="2">
                                        <input type="text" class="form-control" name="keyword" placeholder="Enter keyword">
                                        <span class="input-group-btn">
                                            <button class="btn btn-default" type="submit" id="searchsubmit">Search</button>
                                        </span>
                                    </div><!-- /input-group -->
                                </form>
                            </div>
                        </div>
                    </ul>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3 col-lg-3">
                    <div class="logo"><a href="https://www.italyvacationspecialists.com"><img src="images/logo.png" alt="Logo"></a></div>
                </div>
                <div class="col-lg-5 col-md-5 col-sm-5">
                    <div class="left_call" style="text-align:center;width:100%;padding-top:10px;">
                        <h4>Direct In Italy: <strong>+39 338 351 6912</strong><br><br>
                            Toll Free: <strong>1-866-779-2565</strong><br><br>
                            <img style="vertical-align:middle;" src="images/WhatsApp.png" alt="Whatsapp"> Get us on WhatsApp: <strong>+39 338 351 6912</strong>
                        </h4>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-4">
                    <div class="top_info" style="padding-top:10px;">
                        <ul class="socail">
                            <li><a href="https://www.facebook.com/ItalyVacationSpecialists1" target="_blank"><img width="30" height="30" src="images/fb.png" alt="fb"></a></li>
                            <li><a href="https://www.linkedin.com/in/italygroupspecialists" target="_blank"><img width="30" height="30" alt="linked" src="images/linked.png"></a></li>
                            <li><a href="https://www.youtube.com/channel/UCj54d6ZFqIYx_fkShfgUYMQ" target="_blank"><img width="30" height="30" alt="youtube" src="images/youtube.png"></a></li>
                            <li><a href="https://www.pinterest.it/team7402/" target="_blank"><img width="30" height="30" alt="p-interest" src="images/pr.png"></a></li>
                            <li><a href="https://twitter.com/ivs33708249" target="_blank"><img width="30" height="30" alt="tw" src="images/tw.png"></a></li>
                            <!--<li><a href="https://plus.google.com/110182323110753672602/posts" target="_blank"><img width="30" height="30" alt="google" src="images/google.png" /></a></li>-->
                            <li><a href="https://www.instagram.com/italyvacationspecialists/" target="_blank"><img width="31" height="31" alt="insta" src="images/insta.png"></a></li>
                        </ul>
                    </div>
                    <div class="book_link">
                        <a href="https://www.italyvacationspecialists.com/customizable-tours.html">Customizable Tour Package</a>
                        <!--          	<a href="tours.html">Book Online</a>
          	<a class="col_c" href="https://www.italyvacationspecialists.com/cart.php">Cart Item ( 0 ) <img src="images/cart.png" alt="cart" /></a> -->
                    </div>
                </div>
            </div>
        </div>
        <section>
            <div class="navbar navbar-default" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarmain">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarmain">
                        <ul class="nav navbar-nav" style="font-size: 15px !important;">
                            <li><a href="https://www.italyvacationspecialists.com">Home</a></li>
                            <li class="mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Destinations <b class="caret"></b></a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-sm-4">
                                        <ul>
                                            <li class="dropdown-header">Most Popular Destinations in Italy</li>
                                        </ul>
                                        <ul class="col-sm-4">
                                            <li><a href="italy/lazio/rome.htm">Rome</a></li>
                                            <li><a href="italy/tuscany/florence.htm">Florence</a></li>
                                            <li><a href="italy/veneto/venice.htm">Venice</a></li>
                                            <li><a href="italy/campania/amalfi_coast.htm">Amalfi Coast</a></li>
                                            <li><a href="italy/campania/island_of_capri_italy.htm">Capri</a></li>
                                            <li><a href="italy/liguria/cinque_terre.htm">Cinque Terre</a></li>
                                            <li><a href="italy/lombardia/milan.htm">Milan</a></li>
                                            <li><a href="italy/tuscany.htm">Tuscany</a></li>
                                            <li><a href="italy/sicily.htm">Sicily</a></li>
                                        </ul>
                                        <ul class="col-sm-8 hmb">
                                            <li><a href="About-italy.html"><img src="images/map2.jpg" class="img-responsive" alt="map"></a></li>
                                        </ul>
                                        <div class="clearfix divider"></div>
                                        <ul>
                                            <li class="dropdown-header">Other Countries</li>
                                        </ul>
                                        <ul class="col-sm-4">
                                            <li><a href="destinations/croatia.htm">Croatia</a></li>
                                            <li><a href="destinations/france.htm">France</a></li>
                                            <li><a href="destinations/greece.htm">Greece</a></li>
                                            <li><a href="destinations/malta.htm">Malta</a></li>
                                            <li><a href="destinations/spain.htm">Spain</a></li>
                                        </ul>
                                        <div class="clearfix">&nbsp;</div>
                                        <ul class="hmb">
                                            <li class="dropdown-header">Newsletter</li>
                                            <form class="form" role="form" action="subscribe.php#sm">
                                                <div class="form-group">
                                                    <label class="sr-only" for="email">Email address</label>
                                                    <input type="email" class="form-control" name="email" id="subc_txt2" placeholder="Enter email">
                                                </div>
                                                <button type="submit" id="subc_btn2" class="btn btn-primary btn-block">Submit</button>
                                            </form>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li class="dropdown-header">Northern Italy</li>
                                            <li><a href="italy/veneto/venice.htm">Venice</a></li>
                                            <li><a href="italy/veneto.htm">Veneto</a></li>
                                            <li><a href="italy/liguria/cinque_terre.htm">Cinque Terre</a></li>
                                            <li><a href="italy/liguria/portofino.htm">Portofino</a></li>
                                            <li><a href="italy/lombardia/milan.htm">Milan</a></li>
                                            <li><a href="italy/liguria/genova_ge.htm">Genoa</a></li>
                                            <li><a href="italy/veneto/verona.htm">Verona</a></li>
                                            <li><a href="italy/emilia-romagna/bologna.htm">Bologna</a></li>
                                            <li><a href="italy/italian_lake_district.htm">Northern Lake District</a></li>
                                            <li><a href="italy/emilia-romagna.htm">Emilia Romagna</a></li>
                                            <li><a href="italy/liguria.htm">Liguria</a></li>
                                            <li><a href="italy/lombardia.htm">Lombardia</a></li>
                                            <li><a href="italy/piemonte.htm">Piemonte</a></li>
                                            <li><a href="italy/trentino-alto-adgie.htm">Trentino-Alto-Adgie</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header"><a href="italy/sicily.htm">Sicily</a></li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/aeolian_islands.htm" title="Aeolian Islands">Aeolian Islands</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/agrigento_sicily.htm" title="Agrigento">Agrigento</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/castellammare_del_golfo.htm" title="Castellammare del Golfo">Castellammare del Golfo</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/catania_ct.htm" title="Catania">Catania</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/cefalu.htm" title="Cefalu">Cefalu</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/enna_en.htm" title="Enna">Enna</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li class="dropdown-header">Southern Italy</li>
                                            <li><a href="italy/campania/amalfi_coast.htm">Amalfi Coast</a></li>
                                            <!--<li><a href="italy/puglia/alberobello.htm">Alberobello </a></li>-->
                                            <li><a href="italy/campania/island_of_capri_italy.htm">Capri</a></li>
                                            <li><a href="italy/basilicata-italy/matera.htm">Matera</a></li>
                                            <li><a href="italy/campania/naples.htm">Naples</a></li>
                                            <li><a href="italy/campania/pompeii.htm">Pompeii</a></li>
                                            <li><a href="italy/campania/sorrento.htm">Sorrento</a></li>
                                            <!--<li><a href="italy/calabria/tropea.htm">Tropea</a></li>                                  -->
                                            <li><a href="italy/basilicata-italy.htm">Basilicata</a></li>
                                            <li><a href="italy/calabria.htm">Calabria</a></li>
                                            <li><a href="italy/puglia.htm">Puglia</a></li>
                                            <li><a href="italy/campania.htm">Campania</a></li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Central Italy</li>
                                            <li><a href="italy/abruzzo_molise_italy.htm">Abruzzo &amp; Molise</a></li>
                                            <li><a href="italy/lazio.htm">Lazio</a></li>
                                            <li><a href="italy/tuscany.htm">Tuscany</a></li>
                                            <li><a href="italy/umbria-italy.htm">Umbria</a></li>
                                            <li><a href="italy/republic_of_san_marino.htm">Republic of San Marino</a></li>
                                            <li><a href="italy/marche.htm">Marche</a></li>
                                            <!--<li class="divider"></li>
                                    <li class="dropdown-header"><a href="italy/republic_of_san_marino.htm">Republic of San Marino</a></li>-->
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li class="dropdown-header">Islands of Italy</li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/island_of_capri_italy.htm" title="Capri">Capri</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/calabria/dino_island.htm" title="Dino Island">Dino Island</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/tuscany/elba_island.htm" title="Elba Island">Elba Island</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/destinations/malta/gozo.htm" title="Gozo">Gozo</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/private-tours-ischia.htm" title="Ischia">Ischia</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/island_of_favignana.htm" title="Island of Favignana">Island of Favignana</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/lazio/ponza-island.htm" title="Island of Ponza">Island of Ponza</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/ustica.htm" title="Island of Ustica">Island of Ustica</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sardegna/maddalena_archipelago_national_park.htm" title="Maddalena Archipelago National Park">Maddalena Archipelago National Park</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/pantelleria.htm" title="Pantelleria Island">Pantelleria Island</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/procida_island.htm" title="Procida Island">Procida Island</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sardegna.htm" title="Sardegna">Sardegna</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily.htm" title="Sicily">Sicily</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/veneto/venice/venetian_lagoon.htm" title="Venetian Lagoon">Venetian Lagoon</a>
                                            </li>
                                            <li class="divider"></li>
                                            <li class="dropdown-header">Italian Lake District</li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake-como.htm" title="Lake Como">Lake Como</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake_garda.htm" title="Lake Garda">Lake Garda</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake_maggiore.htm" title="Lake Maggiore">Lake Maggiore</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake_orta.htm" title="Lake Orta">Lake Orta</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-2">
                                        <ul>
                                            <li class="dropdown-header"><a href="italy/italy_gardens.htm">Gardens and Parks in italy</a></li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/boboli_gardens_florence.htm" title="Boboli Gardens - Florence">Boboli Gardens - Florence</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/caserta.htm" title="Caserta">Caserta</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/cilento_coast.htm" title="Cilento Coast">Cilento Coast</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/isola_bella_lake_maggiore.htm" title="Isola Bella - Lake Maggiore">Isola Bella - Lake Maggiore</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/calabria/lavender_fields_and_park.htm" title="Lavender Fields of the Parco Pollino National Park at Morano Calabro">Lavender Fields of the Parco Pollino National Park at Morano Calabro</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sardegna/maddalena_archipelago_national_park.htm" title="Maddalena Archipelago National Park">Maddalena Archipelago National Park</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/marche/monti_sibillini.htm" title="Monti Sibillini National Park">Monti Sibillini National Park</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/mount_vesuvius.htm" title="Mount Vesuvius">Mount Vesuvius</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/ninfa_gardens_lazio.htm" title="Ninfa Gardens Lazio">Ninfa Gardens Lazio</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sardegna/oristano_or.htm" title="Oristano">Oristano</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/lazio/rome/pamphili_park_villa_doria_pamphili.htm" title="Pamphili Park (Villa Doria Pamphili)">Pamphili Park (Villa Doria Pamphili)</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/trentino-alto-adgie/parco_naturale_fanes-senes-braies.htm" title="Parco Naturale Fanes-Senes-Braies">Parco Naturale Fanes-Senes-Braies</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/campania/amalfi_coast/ravello.htm" title="Ravello">Ravello</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/basilicata-italy/san_fele_waterfalls.htm" title="San Fele Waterfalls">San Fele Waterfalls</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/sicily/scala_dei_turchi.htm" title="Scala dei Turchi">Scala dei Turchi</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/lazio/tivoli.htm" title="Tivoli">Tivoli</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/lazio/villa-adriana-tivoli.htm" title="Villa Adriana - Hadrian's Villa - Tivoli">Villa Adriana - Hadrian's Villa - Tivoli</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/lazio/rome/villa_borghese.htm" title="Villa Borghese">Villa Borghese</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake-como/villa_carlotta.htm" title="Villa Carlotta">Villa Carlotta</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake-como/villa_d_este.htm" title="Villa D'Este">Villa D'Este</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/villa-d-este-tivoli-rome.htm" title="Villa D'Este - Tivoli - Rome">Villa D'Este - Tivoli - Rome</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italian_lake_district/lake-como/villa_del_balbianello_garden.htm" title="Villa del Balbianello Lake Como">Villa del Balbianello Lake Como</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/villa_gamberaia_-_tuscany.htm" title="Villa Gamberaia - Tuscany">Villa Gamberaia - Tuscany</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/villa_la_pietra_tuscany.htm" title="Villa La Pietra - Tuscany">Villa La Pietra - Tuscany</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/villa_lante_lazio.htm" title="Villa Lante">Villa Lante</a>
                                            </li>
                                            <li><a href="https://www.italyvacationspecialists.com/italy/italy_gardens/villa_taranto_lake_maggiore.htm" title="Villa Taranto - Lake Maggiore">Villa Taranto - Lake Maggiore</a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li class="mega-dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">Holidays in Villas
                                    <!--Villas By Region--> <b class="caret"></b></a>
                                <ul class="dropdown-menu mega-dropdown-menu row">
                                    <li class="col-sm-2">
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Southern Italy</li>
                                            <li><a href="villas/amalfi-coast">Amalfi Coast</a></li>
                                            <li><a href="villas/cilento-coast">Cilento Coast</a></li>
                                            <li><a href="villas/apulia-and-basilicata">Apulia and Basilicata</a></li>
                                            <li><a href="villas/sicily">Sicily</a></li>
                                            <li><a href="villas/sardinia">Sardinia</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Central Italy</li>
                                            <li><a href="villas/tuscany">Tuscany</a></li>
                                            <li><a href="villas/umbria">Umbria</a></li>
                                            <li><a href="villas/rome-and-lazio">Rome and Lazio</a></li>
                                            <li><a href="villas/adriatic-coast-and-the-marches">Adriatic Coast and The Marches</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-3">
                                        <ul>
                                            <li class="dropdown-header">Northern Italy</li>
                                            <li><a href="villas/liguria-and-cinque-terre">Liguria and Cinque terre</a></li>
                                            <li><a href="villas/veneto-and-venice">Veneto and Venice</a></li>
                                            <li><a href="villas/piedmont-and-lake-maggiore">Piedmont and Lake Maggiore</a></li>
                                            <li><a href="villas/lake-garda">Lake Garda</a></li>
                                            <li><a href="villas/lombardy-and-lake-como">Lombardy and Lake Como</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-1">
                                    </li>
                                </ul>
                            </li>
                            <!--<li><a href="https://www.italyvacationspecialists.com/our_services.html" >Our Services <b class="caret"></b></a>
					<ul class="dropdown-menu multi-level">
						<li><a href="https://www.italyvacationspecialists.com/customizable-tours.html">Cutomizable Tour Packages</a></li>
						<li><a href="https://www.italyvacationspecialists.com/escorted-italy-vacations.html">Italy Escorted Tours</a></li>
                                                <li><a  href="https://www.italyvacationspecialists.com/tours.html">Tours & Activities</a></li>
						<li><a href="https://www.italyvacationspecialists.com/what_sets_us_apart.html">What Makes the Difference Working With Us</a></li>
						<li><a href="https://www.italyvacationspecialists.com/our_services.html">Exclusive Services</a></li>
						<li><a href="https://www.italyvacationspecialists.com/how_we_work.html">How We Work</a></li>
						<li><a href="https://www.italyvacationspecialists.com/testimonial.html">Client Testimonial</a></li>
						<li><a href="https://www.italyvacationspecialists.com/video_gallery.html">Video Gallery</a></li>
						<li><a href="https://www.italyvacationspecialists.com/italy-education-center.html">Italy Education Center & Retreat Centers</a></li>
						<li><a href="https://www.italyvacationspecialists.com/tour-cat/health-and-wellness-retreats.html">Health & Wellness Retreats</a></li>


						<li><a href="https://www.italyvacationspecialists.com/customized_mediterranean_holidays.html">Customized Mediterranean Holidays & Combo Country Tours - Greece, France, Spain, Croatia</a></li>

						<li><a href="https://www.italyvacationspecialists.com/alcohol_free_clean_living_italy.html">Alcohol Free and Clean Living Vacations in Italy and the Mediterranean</a></li>
						

						<li><a href="https://www.italyvacationspecialists.com/travel_for_women_by_women.html">Travel for Women by Women</a></li>

						<li><a href="https://www.italyvacationspecialists.com/single-travel-italy.html">Tours for Solo Travellers</a></li>

						<li><a href="https://www.italyvacationspecialists.com/gay-friendly-vacations-italy.html">Gay and Lesbians Friendly Vacations in Italy</a></li>
						<li><a href="https://www.italyvacationspecialists.com/private-drivers-and-guides-in-italy.html">Private Drivers & Guides in Italy</a></li>
						
						<li><a href="https://www.italyvacationspecialists.com/weddings-and-honeymoons.html">Weddings & Honeymoons</a></li>
						<li><a href="https://www.italyvacationspecialists.com/industry-references.html">Industry References</a></li>
						<li><a href="https://www.italyvacationspecialists.com/employment.html">Employment</a></li>
						<li><a href="https://www.italyvacationspecialists.com/why-book-with-us.html">Why Book With Us</a></li>
						<li><a  href="https://www.italyvacationspecialists.com/faq-about-italy.html">Frequently Asked Questions</a></li>
				</ul>
			</li>-->
                            <!--<li><a  href="tours.html">Tours & Activities</a></li>-->
                            <!--<li><a  href="https://www.italyvacationspecialists.com/italy-private-tours.html">Italy Private Tours</a></li>-->
                            <!--<li><a href="#">Our Tours <b class="caret"></b></a>			
			<ul class="dropdown-menu multi-level">
                            <li><a href="https://www.italyvacationspecialists.com/customizable-tours.html">Customizable Tour Packages</a></li>
                            <li><a href="https://www.italyvacationspecialists.com/escorted-tours.html">Escorted Tour Packages</a></li>
                            <li><a href="https://www.italyvacationspecialists.com/italy-private-tours.html">Privately Guided Tours</a></li>
                        </ul>			
			</li>-->
                            <li><a href="#">Our Tours &amp; Services <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="https://www.italyvacationspecialists.com/questionnaire_form.php">Plan a Peronsalized Journey through Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/escorted-tours.html">Guaranteed Departure Escorted Holidays in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/italy-private-tours.html">Privately Guided Tours</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/weddings-and-honeymoons.php">Weddings and Romantic Holidays in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/virtual-fam-tours.html">Virtual Fam Tour</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/italy-education-center.html">Italy Education Center &amp; Retreat Centers</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/private-drivers-and-guides-in-italy.html">Transportation and Logistical Support for Groups and Individuals</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/private-tour/food-wine.html">Food and Wine Holidays in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/private-drivers-and-guides-in-italy.html">Your Driver in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/italy-custom-holidays.html">Multi-Country Mediterranean Holidays: France, Greece, Croatia, Spain, Portugal and Morocco</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/travel_for_women_by_women.html">Travel for Women and Solo Travelers in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/gay-friendly-vacations-italy.html">Travel for the LGBTQ Community in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/why-book-with-us.html">Why Using Our Services can Make a Big Impact on Your Future Trip</a></li>
                                </ul>
                            </li>
                            <!--<li><a  href="#" >Wine & Dine <b class="caret"></b></a>			
			<ul class="dropdown-menu multi-level">
                            <li><a href="/supplier/restaurants.html">Restaurants in Italy</a></li>
                            <li><a href="/supplier/olive-oil-estates.html">Olive Oil Estates in Italy</a></li>
                            <li><a href="/supplier/wineries.html">Wineries in Italy</a></li>
                        </ul>			
			</li>-->
                            <li><a href="#">Featured Properties <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-level">
                                    <li><a href="https://www.italyvacationspecialists.com/accommodation/hotel">Hotels in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/accommodation/villas-apartments-italy">Villas in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/accommodation/cottages_apartments">Apartments in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/supplier/agriturismo.html">Farm Estates/Agriturismo in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/supplier/sea-side-resorts.html">Sea-side Resorts in Italy</a></li>
                                    <li><a href="https://www.italyvacationspecialists.com/supplier/spas-and-thermal-baths.html">Spas and Thermal Baths in Italy</a></li>
                                </ul>
                            </li>
                            <!--<li><a  href="https://www.italyvacationspecialists.com/tour-cat/shore-excursions-italy.html">Shore Excursions</a></li>-->
                            <li><a target="_blank" href="https://italyvacationspecialists.my-limo.com">Transportation
                                    <!--& Excursions--></a></li>
                            <li><a href="https://www.italyvacationspecialists.com/weddings-and-honeymoons.html">Weddings and Honeymoons</a></li>
                        </ul>
                    </div>
                    <!--/.nav-collapse -->
                </div>
            </div>
        </section>
    </header>
    <main>
      <!--   <div class="banner">
            <div class="container">
                <div class="banner-caption">
                    <h1>Your Private Driverand Custom Holidays In Italy</h1>
                    <h2>The Most Beautiful Places</h2>
                    <div class="site-btn">
                        <a href="#">Visit Us</a>
                    </div>
                </div>
            </div>
        </div> -->
        <section>
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <?php
 
    $query1="select * from banner";

    $result=db_query($query1);
     while($row=mysqli_fetch_assoc($result)){
        ?>
  <div class="carousel-inner">
    
    <div class="item active">
      <img src="admin/upload/<?php echo $row['image']?>"  style="height:100%;width:100;max-height: 500px;">
      <div class="carousel-caption">
        <h3 style="color:#fff;"><?php echo $row["title"]?></h3>
       
      </div>
    </div>

 
  </div>
     <?php } ?>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
        </section>
        <div class="second-section padding-top-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="second-image">
                            <img src="images/first.png">
                        </div>
                        <div class="second-des">
                            <h1>Private Drivers & Guides in Italy</h1>
                            <h2>Our Driving Services in Italy:</h2>
                            <ul>
                                <li>Single transfers (airport transfers etc) BOOK ONLINE</li>
                                <li>Multiple transfers as part of a customized itinerary</li>
                                <li>Private driving tours, with English-speaking driver-guides</li>
                                <li>Private tours with professional driver + registered tour guide + tickets</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="resorce-section">
            <div class="container">
                <div class="section-title for-center">
                    <h1>Resources</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                            <?php
 
    $query1="select * from resourses";

    $result=db_query($query1);
     while($row=mysqli_fetch_assoc($result)){
        ?>
                            <div class="item">
                                <img src="admin/upload/<?php echo $row['image']?>">
                            </div>
                           <!--  <div class="item">
                                <img src="images/family.jpg">
                            </div> -->
                           <!--  <div class="item">
                                <img src="images/horse.jpg">
                            </div> -->
                        <?php }?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="about-section padding-top-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-7">
                        <div class="about-des">
                            <div class="section-title">
                                <h1>Why hire a private driver?</h1>
                            </div>
                            <p>Driving in Italy will give you the freedom to visit places that can't be accessed by public transport, but there are many reasons you wouldn't want to drive here yourself:</p>
                            <p>Local driving can be challenging for non-locals, and some places are definitely much more dangerous than others. Italians can be aggressive and impatient behind the wheel, which our professional drivers are unfazed by.</p>
                            <p>Driving in most historic town centers is limited these days. With a rental car, you would have to park outside the center and walk in. Professional drivers can take you into the heart of the city, drop you off and pick you up again when you are ready to leave.</p>
                            <p>Roads weren't designed for modern tourism so you can spend a lot of time in traffic, which can be stressed. From the comfort of the backseat, you can enjoy the view and allow your driver to navigate the best route to your destination.</p>
                            <p>Italy is renowned for its wine and wine tasting is one of our most popular tours. With a driver, you won't have to worry about exceeding the 1 glass limit, or Italy's zero-tolerance policy for those who do drink and drive.</p>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="about-image">
                            <img src="images/about.png">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="blog-section">
            <div class="container">
                <div class="section-title for-center">
                    <h1>Our Blog</h1>
                </div>
                <div class="row">
                    <?php
 
    $query1="select * from blog";

    $result=db_query($query1);
     while($row=mysqli_fetch_assoc($result)){
        ?>
                    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-image">
                                <img src="admin/upload/<?php echo $row['image']?>">
                            </div>
                            <div class="blog-des">
                                <h2><?php echo $row["title"]?> </h2>
                                <p><?php echo $row["description"]?> </p>
                                <div class="site-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php }?>
                 <!--    <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-image">
                                <img src="images/blog2.jpg">
                            </div>
                            <div class="blog-des">
                                <h2>What is an “Agriturismo” & Why it is the Best</h2>
                                <p>Agriturismos, or agriturismi, are a great way to enjoy authentic, affordable and exclusive holiday experiences...</p>
                                <div class="site-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                   <!--  <div class="col-md-4">
                        <div class="blog-box">
                            <div class="blog-image">
                                <img src="images/blog3.jpg">
                            </div>
                            <div class="blog-des">
                                <h2>Top 7 Reasons to Take an Escorted Tour</h2>
                                <p>Banish any thoughts of packed coaches, long transfers and tours with 50 other people. Now close...</p>
                                <div class="site-btn">
                                    <a href="#">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="testimonials padding-top-bottom-60">
            <div class="container">
                <div class="section-title for-center">
                    <h1>Our Testimonials</h1>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="owl-carousel owl-theme">
                             <?php
 
    $query1="select * from testimonial";

    $result=db_query($query1);
     while($row=mysqli_fetch_assoc($result)){
        ?>
                            <div class="item">
                                <div class="testimonials-box">
                                    <div class="testimonials-image">
                                        <div class="tes-icon">
                                            <img src="admin/upload/<?php echo $row['image']?>">
                                        </div>
                                    </div>
                                    <div class="testimonials-des">
                                        <h2><?php echo $row["name"]?></h2>
                                        <p><?php echo $row["feedback"]?></p>
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        <?php }?>
                         <!--    <div class="item">
                                <div class="testimonials-box">
                                    <div class="testimonials-image">
                                        <div class="tes-icon">
                                            <img src="images/u.png">
                                        </div>
                                    </div>
                                    <div class="testimonials-des">
                                        <h2> Ann Brownell, KHM Travel Group</h2>
                                        <p>In September of 2018 I brought a group of 12 from Venice to Sicily and organized all of my services with the Italy Vacation Specialists. Being</p>
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div> -->
                          <!--   <div class="item">
                                <div class="testimonials-box">
                                    <div class="testimonials-image">
                                        <div class="tes-icon">
                                            <img src="images/u.png">
                                        </div>
                                    </div>
                                    <div class="testimonials-des">
                                        <h2>Vijaya Sunil CPA, CGA</h2>
                                        <p>In August 2018, my family of four and myself travelled from Vancouver, BC to Rome Italy and spent 3 weeks touring Italy with IVS.</p>
                                        <a href="#">Learn More</a>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-section padding-bottom-60">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="inquery-form">
                        	<h3>QUICK ENQUIRY FORM</h3>
                            <form action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="name" placeholder="Your Name">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="date" name="date" class="form-control" placeholder="Date">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="na" class="form-control" placeholder="Number of Adults">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="nk" class="form-control" placeholder="Number of Kids">
                                    </div>
                                    <div class="col-md-6">
                                        <input type="number" name="phone" class="form-control" placeholder="Your Phone">
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="message" placeholder="Your Request"></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <button type="submit" name="submit">Send Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6">
                    	<div class="outer-box1">
                    		<div class="outer-caption">
                    			<h2>Private Tours</h2>
                    			<h3>Buy 2 and Get 50% Off</h3>
                    		</div>
                    		<a class="target-link" href="#">Click Here</a>
                    	</div>
                    	<div class="outer-box2">
                    		<div class="outer-caption">
                    			<h2>Incredible Experiences</h2>
                    			<h3>Exceptional Prices</h3>
                    		</div>
                    		<a class="target-link" href="#">Click Here</a>
                    	</div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer class="footer">
<div style="background:#77a551 none repeat scroll 0 0;color:#FFF;padding:10px 5px;">
	<div class="container">
			<div class="row">
            <div class="col-sm-12">For Customized Holidays or Expert Advice for travel in Italy or the Mediterranean, please get in touch with your travel agent or have them contact us by email at: <span style="color:black">team@italyvacationspecialists.com</span>, here in <span style="color:black">Italy at +39 338 351 6912 or TOLL FREE at 1-866-779-2565</span>.  We will get back to you in 24 hours and remain at your disposal to assist you in anyway that we can with all of your needs here in Italy or Europe! </div>
			</div>
          </div>
        </div>
	
    <div class="footer_main_c" style="margin-top:0">
      <div class="footer_bg">
        <div class="container">
          <div class=" footer_main">
            <div class="footer_logo"> <a href="https://www.italyvacationspecialists.com"><img src="images/logo.png" alt="logo-foot"></a>
              <div class="addr">
                <h4 style="font-size:25px;">Expert Travel Planners to Italy &amp; the Mediterranean</h4>
<!--                <h5>Address in Rome: Via San Damaso, 15 - 00165 Roma P.I. 13372501000</h5>-->
                     					<!-- <h5>Address in Rome: Via Giacinto de’ Vecchi Pieralice, 44. Roma, Italy 00167.</h5>	-->
                <h5>TOLL FREE 1-866-779-2565 &nbsp;&nbsp; Direct in Italy: + 39 338 351 6912</h5>
                              </div>
            </div>
            <div class="footer_tree"> <img src="images/footer_tr.png" class="img-responsive" alt="footr"></div>
          </div>
        </div>
          
        <div class="row soc_f">
          <div class="container">            
            <div class="col-lg-8 col-md-8 col-sm-8">
              <div class="news_box">
                  <form method="get" action="subscribe.php#sm">
                  <label style="font-size: 23px; padding: 0; margin: 0;">Subscribe to our Newsletter : &nbsp;</label>
                  <input type="text" class="new_vo form-control" name="email" id="subc_txt" placeholder="Your Email Address">
                  <input type="submit" class="btn btn-warning" id="subc_btn" value="Subscribe">
                  </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4">
              <div class="footer_socail pull-right">               
                 <ul>
				 <li><a href="https://www.instagram.com/italyvacationspecialists/" target="_blank"><img width="31" height="31" alt="insta" src="images/insta.png"></a></li>  
            	<li><a href="https://www.facebook.com/ItalyVacationSpecialists1" target="_blank"><img width="30" height="30" src="images/fb.png" alt="fb"></a></li>
                 <li><a href="https://www.linkedin.com/in/italygroupspecialists" target="_blank"><img width="30" height="30" alt="linked" src="images/linked.png"></a></li>
                 
                  <li><a href="https://www.youtube.com/channel/UCj54d6ZFqIYx_fkShfgUYMQ" target="_blank"><img width="30" height="30" alt="youtube" src="images/youtube.png"></a></li> 
                  <li><a href="https://www.pinterest.it/team7402/" target="_blank"><img width="30" height="30" alt="pr" src="images/pr.png"></a></li> 
                  <li><a href="https://twitter.com/ivs33708249" target="_blank"><img width="30" height="30" alt="tw" src="images/tw.png"></a></li> 
                  <li><a href="https://plus.google.com/110182323110753672602/posts" target="_blank"><img width="30" height="30" alt="google" src="images/google.png"></a></li>
				             
            </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="full_copy">
          <div class="copy_link" style="text-align:center; width:100%;">
        	<a href="https://www.italyvacationspecialists.com">Home</a> | <a href="About-italy.html">About Italy</a> | 
            <a href="our-story.html">Our Story</a> |
            <a href="contact-us.html">Contact US</a> | <a href="testimonial.html">Client Testimonial</a> | <a href="company-info.html">Fornitori Italiani</a> | <a href="terms-of-use.html">Terms &amp; Conditions</a> | 
            <a href="privacy-policy.html">Privacy Policy</a> | <a href="sitemap.html">Sitemap</a>| <a href="https://www.italyvacationspecialists.com/blog">Blog</a>        
          </div>
          <div class="copy">
            <h5>© 2022 <a href="http://www.italyvacationspecialists.com">www.italyvacationspecialists.com</a>. All Rights Reserved </h5>
          </div>
        </div>
      </div>
    </div>
  </footer>
</body>
<script>
$(document).ready(function() {
    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 3,
        loop: true,
        nav:true,
        margin: 10,
        autoplay: false,
        autoplayTimeout: 1000,
        autoplayHoverPause: true,
         responsiveClass:true,
     responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:false,
        },
        600:{
            items:1,
            nav:false,
        },
        1000:{
            items:3,
            nav:false,
        }
    }

    });
    $('.play').on('click', function() {
        owl.trigger('play.owl.autoplay', [1000])
    })
    $('.stop').on('click', function() {
        owl.trigger('stop.owl.autoplay')
    })

})

</script>
<script type="text/javascript">

</script>

</html>