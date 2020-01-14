<!doctype html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta name="author" content="Florence Sacré" />
        <meta name="copyright" content="©2020 Florence Sacré" />
        <meta name="description" content="Travail de fin d'étude de Florence Sacré" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <meta name="keywords" content="TFE, EICVN, Design, Développement, Web, Florence Sacré, ecommerce, vidéo" />
        <title>Video | Florence Sacré</title>
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
    <body class="video">
        <div id="container">
            <header>
                <div id="topbar">
                    <!--<h1 id="logo-florence-sacré"><a href="index.html">Florence Sacré</a></h1>-->
                    <nav>
                        <ul>
                            <li><a href="{{URL::to('/login')}}">Connexion</a></li>
                            <li><a href="{{URL::to('/register')}}">Inscription</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </header>
            <div id="content">
                <iframe src="https://player.vimeo.com/video/327966481"></iframe>
                <section id="description">
                    <p>Titre : Jelly-o candy dragée</p>
                    <p class="description">Description : Jelly-o candy dragée powder donut caramels dessert danish sesame snaps. Wafer croissant muffin marzipan gummi bears. Caramels chupa chups dessert ice cream oat cake. Liquorice marzipan pie. Topping cupcake cake tootsie roll caramels candy canes dragée apple pie tootsie roll. Marshmallow topping pastry cake cheesecake. Dessert icing oat cake toffee croissant lemon drops sweet macaroon. Lemon drops oat cake dessert oat cake pie halvah croissant.</p>
                    <p>Durée : 02:10</p>
                    <p>Résolution : 720 * 480</p>
                    <p>Taille : 30 MB</p>
                    <p>Ratio vidéo : 16/9</p>
                </section>
                <section id="download">
                    <a href="#">Téléchargement</a>
                </section>
            </div><!-- end content -->
        </div><!-- end container -->
    </body>
</html>