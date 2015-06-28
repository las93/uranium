<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{$oPage->title}</title>
    <meta name="Description" content="{$oPage->description}">
    <!-- normalizar -->
    <link href="css/normalize.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!--fontawesome-->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!--animation-->
    <link href="css/animate.min.css" rel="stylesheet">

    <!--main css-->
    <link href="css/style.css" rel="stylesheet">

    <!--main css-->
    <link href="css/responsive.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div id="preloader">
        <i class="fa fa-spinner fa-pulse fa-3x fa-fw margin-bottom"></i>
    </div>
    
    <header id="header_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="logo">
                        <h2><a href="">Scrum-Agile.com</a></h2>
                    </div>
                </div>
                <div class="col-sm-8">
                    <div class="mainmenu">
                        <div class="navbar navbar-nobg">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Agile Scrum</a></li>
                                    <li><a href="#">blog</a></li>
                                    <li><a href="#">Formations</a></li>
                                    <li><a href="#">Formation en ligne</a></li>
                                    <li><a href="#">Contactez-nous</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="header_area_text">
                        <h2 class="wow slideInDown" data-wow-duration="2s">Devenez agile en adoptant la méthodologie Scrum</h2>
                        <p class="wow slideInUp">Adopter la méthodologie Agile Scrum qui a fait ses preuves dans de grandes entreprises ; elles ont su obtenir une meilleure productivité avec cette organisation de travail contrairement à leurs anciens projets cycle en V.</p>
                        <a class="wow slideInUp" data-wow-duration="2s" href="">Adopter le Scrum</a>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header top area -->

    {include file=$model}

    <footer id="footer_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="company_logo wow slideInDown">
                        <h2>Scrum-Agile.com</h2>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>PAQUET JUDICAEL</h2>
                        <p>Managert IT & Scrum Master &nbsp; Rue du Commerce
                        </p>
                        <h3>
                            +33(6) 88 89 78 23
                            judicael.paquet@scrum-agile.com </h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>Linkedin</h2>
                        <p>Découvrez mon profil sur Linkedin</p>
                        <h3><a href="https://www.linkedin.com/profile/view?id=58844084&trk=hp-identity-photo" style="color:white" rel="nofollow">voir CV Judicaël Paquet</a></h3>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="company_address wow slideInDown">
                        <h2>informations</h2>
                        <p>Contactez-nous pour tout besoin d'information complémentaire</p>
                        <h3>
                            +33(6) 88 89 78 23<br/>
                            info@scrum-agile.com </h3>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- main jQuery-->
    <script src="js/jquery-1.11.3.min.js"></script>

    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>

    <!-- main js -->
    <script src="js/main.js"></script>
</body>

</html>
