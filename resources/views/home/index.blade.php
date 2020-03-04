<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="Florence Sacré" />
        <meta name="copyright" content="©2020 Florence Sacré" />
        <meta name="description" content="Travail de fin d'étude de Florence Sacré" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="TFE, EICVN, Design, Développement, Web, Florence Sacré, ecommerce, vidéo" />
        <title>Index | Florence Sacré</title>
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/reset.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">


        <!-- Grille -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/hugrid.css')}}" />
        <script type="text/javascript" src="{{asset('javascript/jquery-1.6.2.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('javascript/hugrid.js')}}"></script>
        <script type="text/javascript">
            definegrid = function() {
                var browserWidth = $(window).width();
                if (browserWidth >= 1000)
                {
                    pageUnits = 'px';
                    colUnits = 'px';
                    pagewidth = 965;
                    columns = 9;
                    columnwidth = 85;
                    gutterwidth = 25;
                    pagetopmargin = 0;
                    rowheight = 25;
                    gridonload = 'off';
                    makehugrid();
                }
                if (browserWidth <= 768)
                {
                    pageUnits = 'px';
                    colUnits = 'px';
                    pagewidth = 605;
                    columns = 6;
                    columnwidth = 80;
                    gutterwidth = 25;
                    pagetopmargin = 0;
                    rowheight = 25;
                    gridonload = 'off';
                    makehugrid();
                }
                if (browserWidth <= 400)
                {
                    pageUnits = 'px';
                    colUnits = 'px';
                    pagewidth = 319;
                    columns = 2;
                    columnwidth = 147;
                    gutterwidth = 25;
                    pagetopmargin = 0;
                    rowheight = 25;
                    gridonload = 'off';
                    makehugrid();
                }
            };
            $(document).ready(function() {
                definegrid();
                setgridonload();
            });
            $(window).resize(function() {
                definegrid();
                setgridonresize();
            });
        </script>
    </head>
    <body class="index">
        <div id="container">
            <header>
                <div id="topbar">
                    <!--<h1 id="logo-florence-sacré"><a href="index.html">Florence Sacré</a></h1>-->
                    <nav>
                        <ul>
                            <li><a href="{{URL('../login')}}">Connexion</a></li>
                            <!--<li><a href="{{URL('../register')}}">Inscription</a></li>-->
                            <li><a href="{{URL('../subscribe')}}">S'abonner</a></li>
                        </ul>
                    </nav>
                </div>
                <div id="img-header">
                    <h2>Vidéos</h2>
                </div><!-- end img-header -->
            </header>
            <div id="content">
                <nav class="categorie">
                    <ul>
                        <li><a href="{{URL('voyage')}}">Voyage</a></li>
                        <li><a href="#">Animaux</a></li>
                        <li><a href="#">Urbex</a></li>
                        <li><a href="#">Hiver</a></li>
                    </ul>
                </nav>
                <section>
                    <a href="{{URL('video')}}"><img width="380px" alt="#" src="{{asset('images/unsplash.jpg')}}" /></a>
                    <a href="{{URL('video')}}"><img width="380px" alt="#" src="{{asset('images/pexels.jpg')}}" /></a>
                    <a href="{{URL('video')}}"><img width="380px" alt="#" src="{{asset('images/publicdomainarchive.jpg')}}" /></a>
                    <a href="{{URL('video')}}"><img width="380px" alt="#" src="{{asset('images/morguefile.jpg')}}" /></a>
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
</html>