<!DOCTYPE html>
<html lang="fr">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <title>CLCM - Centre Lorrain de Calcul haute performance en Mécanique</title>
    <meta name="author" content="Fabien Zanetti" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="http://www.lem3.fr/img/favicon3.ico">
    <link href="dist/css/bootstrap.min.css" rel="stylesheet">
<!--[if lt IE 9]>
<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link href="dist/css/styles.css" rel="stylesheet">
</head>
<body>
    <!-- balise du corps du site -->
    <div id="wrap">
        <!-- en-tête du ste -->
        <header class="masthead">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1><a href="#">CLCM</a></h1> - 
                    </div>
                    <h3 class="pull-right">Centre Lorrain de Calcul en Mécanique</h3>
                </div>
            </div>
        </header>
        <!-- fin de l'entête -->

        <!-- Barre de navigation -->
        <div class="navbar navbar-custom navbar-inverse navbar-static-top" id="nav">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav nav-justified"> <!-- rajouter ici le lien dans le menu de votre nouvelle page -->
                        <li><a href="#section2">Partenaires</a></li>
                        <li><a href="#section3">Responsables</a></li>
                        <li><a href="#section4">Logiciels</a></li>
                        <li><a href="#section5">Formations</a></li>
                        <li><a href="#section6">Financement</a></li>
                        <li><a href="#section7">Infrastructure</a></li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div><!--/.container -->
        </div><!--Fin de la barre de navigation -->

        <!-- liens de chaques pages 
            Rajouter une éventuelle nouvelle page ici
        -->
        <?php
        include('pages/accueille.html'); 
        include('pages/partenaires.html');
        include('pages/responsables.html');
        include('pages/logiciels.html');
        include('pages/formations.html');
        include('pages/financement.html');
        include('pages/infrastructure.html');

        ?>

        
        <!-- Google Maps -->
        <div class="divider" id="section10"></div>
        <div class="row">
            <div class="page-header text-center">
                <h1>Situation géographique du cluster</h1>
            </div>

            <!-- Div d'affichage de la map -->
            <div id="map-canvas"></div>
            <hr>

            <!-- zone de contact -->
            <div class="divider" id="section11"></div>      
            <div class="col-xs-12 col-sm-10 col-lg-8">
                <h2 style="text-align: left">Un problème ?</h2><br />
                <form name="formContact" method="post" action="mail.php">
                    <div class="row form-group">
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prénom" required>
                        </div>           
                        <div class="col-xs-5">
                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom de famille" required>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-xs-5">
                            <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                        </div>
                        <div class="col-xs-5">
                            <input type="tel" class="form-control" id="phone" name="phone" placeholder="Téléphone du bureau" required>
                        </div>
                    </div>
                        <div class="row form-group">
                          <label class="col-xs-1 control-label" for="batiment">Bâtiment</label>
                          <div class="col-xs-4">
                            <select id="batiment" name="batiment" class="form-control">
                              <option value="CIRAM">CIRAM</option>
                              <option value="Saulcy B">Saulcy - B</option>
                              <option value="Saulcy C">Saulcy - C</option>
                          </select>
                      </div>
                  </div>
                  <div class="row form-group">
                    <div class="col-xs-10">
                        <textarea class="form-control" id="descriptif" name="descriptif" placeholder="Descriptif" required=""></textarea>
                        <span class="help-block">Veiller à bien indiquer votre login, identifiant et la date.</span>
                    </div>                       
                </div>
                <div class="row form-group">
                    <div class="col-xs-10">
                        <button type="submit" name="envoyer" id="envoyer" class="btn btn-default pull-right">Soumettre</button>
                    </div>
                </div>
            </form>
        </div>

        <div class="col-sm-3 pull-right">
            <address style="margin-top: 25px;">
                <strong>Metz - technopôle</strong><br>
                4 rue Augustin Fresnel<br>
                F-57078 Metz - cedex 01<br>
                <i class="glyphicon glyphicon-earphone" title="téléphone"></i> 
                <a href="tel:%2B33%20%280%293%2087%2037%2054%2075" value="+33387375475" target="_blank">+33 (0)3 87 37 54 75</a><br>
                <i class="glyphicon glyphicon-print" title="fax"></i> 
                <a href="tel:%2B33%20%280%293%2087%2037%2042%2084" value="+33387374284" target="_blank">+33 (0)3 87 37 42 84</a>
            </address>
            <address>
                <strong>Nous contacter :</strong><br>
                <a href="mailto:lem3-serviceinfo@univ-lorraine.fr">lem3-serviceinfo@univ-lorraine.fr</a>
            </address>          
        </div>
    </div>




    <div class="container">
        <div class="col-sm-8 col-sm-offset-2 text-center">
            <h2>Rattachement</h2>
            <hr>
	    <p>Université de Lorraine - <a href="http://www.univ-lorraine.fr/" target="_black">Site de l'université de Lorraine</a></p>
            <p>CNRS - <a href="http://www.cnrs.fr/" target="_blank">Site du CNRS</a></p>
            <p>Art et Métiers Partis Tech - <a href="http://www.ensam.eu" target="_blank">Site Art et Métiers</a></p>
            <hr>
        </div><!--/col-->
    </div><!--/container-->
</div><!--/wrap-->

<!-- pied de page -->
<div id="footer">
    <div class="container">
        <p class="text-muted">Copyright <span style="color: #e15f01"> Fabien Zanetti </span> - <a href="http://fabien-zanetti.ovh" target="_blank">www.fabien-zanetti.ovh</a></p>
    </div>
</div>

<!-- bouton de retour vers le haut de page -->
<a id="back-to-top" href="#" class="btn btn-primary btn-lg" role="button" title="Cliquer pour revenir en haut de page" data-toggle="tooltip" data-placement="left"><span class="glyphicon glyphicon-chevron-up"></span></a>

<!-- bouton de lien vers la page contact -->
<a id="contact" href="#section7" class="btn btn-primary btn-lg" role="button" title="Cliquer pour atteindre la page de contact"
data-toggle="tooltip" data-placement="right"><span class="glyphicon glyphicon-send"></span></a>

<!-- référence des scripts -->
<script src="dist/js/jquery.min.js"></script>
<script src="dist/js/bootstrap.min.js"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>
<script src="dist/js/scripts.js"></script>
</body>
</html>
