<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>{$oPage->get_title()}</title>
    <meta name="Description" content="{$oPage->get_description()}">
    {if $oPage->get_nofollow() == 'yes'}
        <meta name="robots" content="noindex,nofollow">
        <meta name="googlebot" content="noindex,nofollow">
    {/if}
    <!-- normalizar -->
    <link href="/css/normalize.css" rel="stylesheet">

    <!-- Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Cabin:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700' rel='stylesheet' type='text/css'>


    <!-- Bootstrap -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!--fontawesome-->
    <link href="/css/font-awesome.min.css" rel="stylesheet">

    <!--animation-->
    <link href="/css/animate.min.css" rel="stylesheet">

    <!--main css-->
    <link href="/css/style.css" rel="stylesheet">

    <!--main css-->
    <link href="/css/responsive.css" rel="stylesheet">


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
                                    {foreach from=$aSummary item=$oSummaryPage}
                                        <li><a href="{$oSummaryPage->get_url()}"{if $oSummaryPage->get_nofollow() == 'yes'} rel="nofollow"{/if}>{$oSummaryPage->get_name()}</a></li>
                                    {/foreach}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {if $app.server.REQUEST_URI == '/'}
            <div class="row">
                <div class="col-md-12">
                    <div class="header_area_text">
                        <h2 class="wow slideInDown" data-wow-duration="2s">Devenez agile en adoptant la méthodologie Scrum</h2>
                        <p class="wow slideInUp">Adopter la méthodologie Agile Scrum qui a fait ses preuves dans de grandes entreprises ; elles ont su obtenir une meilleure productivité avec cette organisation de travail contrairement à leurs anciens projets cycle en V.</p>
                        <a class="wow slideInUp" data-wow-duration="2s" href="">Adopter le Scrum</a>
                    </div>
                </div>
            </div>
            {/if}
        </div>
    </header>
    <!-- end header top area -->

    {if !isset($sContentModel)}{include file=$model}{else}{$sContentModel}{/if}


    <section id="caal_to_action_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="call_to_action_text wow slideInLeft" data-wow-duration="2s">
                        <h2>Etes-vous prêt à adopter le Scrum ?</h2>
                        <p>Cliquez ici pour découvrir nos formations pour basculer votre entité en Scrum</p>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="call_project text-right wow slideInRight" data-wow-duration="2s">
                        <a href="">Formations en ligne</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end call to action area -->
    
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
                        <h2>QUI SUIS-JE ?</h2>
                        <p>Paquet Judicaël<br/>Manager IT & Scrum Master<br/>Rue du Commerce
                        </p>
                        <h3>judicael.paquet@scrum-agile.com</h3>
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
    <script src="/js/jquery-1.11.3.min.js"></script>
    
    <!-- main jQuery-->
    <script src="/js/jquery.parallax-1.1.3.js"></script>

    <!-- bootstrap js -->
    <script src="/js/bootstrap.min.js"></script>

    <!-- wow js -->
    <script src="/js/wow.min.js"></script>
    <script>
        new WOW().init();
        $("#header_area").parallax(0, 0.7, true);
    </script>

    <!-- main js -->
    <script src="/js/main.js"></script>
    
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
    
      ga('create', 'UA-64855607-1', 'auto');
      ga('send', 'pageview');

    </script>
</body>

</html>
