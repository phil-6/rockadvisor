<!-- app/views/presentation.php -->
<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 10/05/2017
 * Time: 11:33
 -->

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <meta name="description" content="Rock Advisor - A Climbing Guidebook for the Digital Age">
    <meta name="author" content="Phil Reynolds">

    <title>Rock Advisor</title>

    <!-- Bootstrap Core CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Custom Fonts -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Raleway:200,300,600,700,900|Roboto:300,400,500,700,900"
          rel="stylesheet">

    <!-- Plugin CSS -->
    <link href="../css/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="../css/theme.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- Google Analytics -->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments)
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src = g;
            m.parentNode.insertBefore(a, m)
        })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

        ga('create', 'UA-92612290-1', 'auto');
        ga('send', 'pageview');

    </script>

</head>

<body id="page-top">

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <div id="homeHeading">
                <h1 class="headingBrandRock">Rock</h1> <h1 class="headingBrandAdvisor">Advisor</h1>
            </div>

            <hr>
            <p>A Climbing Guidebook for the Digital Age</p>
            <a href="#howItWorks" class="btn btn-primary btn-xl page-scroll">How It Works</a>
        </div>
    </div>
</header>
<!--
    ==========
 about//howItWorks
    ==========
              -->

<section id="howItWorks">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">How Rock Advisor Works</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#database" class="page-scroll">
                    <div class="service-box">
                        <i class="fa fa-4x fa-database text-primary sr-icons"></i>
                        <h3>Database</h3>
                        <p class="text-muted">Rock Advisor is built on a Database. Programmed using PHP and Laravel</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#APIModal"
                   data-toggle="modal">
                    <div class="service-box">
                        <i class="fa fa-4x fa-exchange text-primary sr-icons"></i>
                        <h3>API</h3>
                        <p class="text-muted">An Application Programmable Interface allows access to the Database</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#webApp" class="page-scroll">
                    <div class="service-box">
                        <i class="fa fa-4x fa-space-shuttle fa-spin text-primary sr-icons"></i>
                        <h3>Web App</h3>
                        <p class="text-muted">The front end displays the data in an easy dynamic way we can read on any device.</p>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <a href="#map" class="page-scroll">
                    <div class="service-box">
                        <i class="fa fa-4x fa-globe text-primary sr-icons"></i>
                        <h3>Map</h3>
                        <p class="text-muted">There's also a pretty cool Google map that shows all of the Crags and lets users filter them.</p>
                    </div>
                </a>
            </div>

        </div>
    </div>
</section>
<!--
    ==========
     DATABASE
    ==========
              -->
<section class="bg-primarygrad" id="database">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h1 class="section-heading">Database</h1>
                <hr class="light">
                <p class="text-faded">The database is the framework that holds all the important information we need.</p>
                <div class="about-buttons">
                    <a href="#ERDModal"
                       class="btn btn-default btn-xl sr-button btn-zoom"
                       data-toggle="modal">Entity Relationship Diagram</a>
                </div>
                <hr class="light">

            </div>


            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p>There are four primary tables in the Rock Advisor Database</p>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <a href="#database">
                            <div class="service-box">
                                <i class="fa fa-4x fa-globe  sr-icons"></i>
                                <h3 class="light">Areas</h3>
                                <p class="text-faded">General are stored here. E.G. Wales, Gower, Rhosilli, Etc.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <a href="#database">
                            <div class="service-box">
                                <i class="fa fa-4x fa-map-pin  sr-icons"></i>
                                <h3>Crags</h3>
                                <p class="text-faded">These are the locations where you can climb. Big solid walls of rock.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <a href="#database">
                            <div class="service-box">
                                <i class="fa fa-4x fa-level-up  sr-icons"></i>
                                <h3>Climbs</h3>
                                <p class="text-faded">This is the actual way to climb up the rock. The route you take.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <a href="/api/grades">
                            <div class="service-box">
                                <i class="fa fa-4x fa-tachometer  sr-icons"></i>
                                <h3>Grades</h3>
                                <p class="text-faded">This stores what type of climbing and how hard the clumb is.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <hr class="light">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2 text-center">
                        <p>Each table has a Model and a Controller</p>
                    </div>
                    <div class="col-lg-3 col-md-6 col-lg-offset-3 text-center">
                        <a href="#database">
                            <div class="service-box">
                                <i class="fa fa-4x fa-cube  sr-icons"></i>
                                <h3>Model</h3>
                                <p class="text-faded">Defines the object. Assigns the corresponding database table, its relationships with other objects, extra properties and functions.</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <a href="#database">
                            <div class="service-box">
                                <i class="fa fa-4x fa-gamepad  sr-icons"></i>
                                <h3>Controller</h3>
                                <p class="text-faded">Controls the passing of information in and out of the database. The API sends requests to the controller and returns data.</p>
                            </div>
                        </a>
                    </div>


                </div>
            </div>

        </div>
        <hr class="light">
        <div class="text-center">
            <a href="#howItWorks" class="btn btn-default  page-scroll">
                <i class="fa fa-2x fa-cog fa-spin text-primary sr-icons"></i>
            </a>
        </div>
    </div>
</section>


<!--
    ==========
     WEBAPP
    ==========
              -->
<section id="webApp">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h1 class="section-heading">Web Application</h1>
                <hr>
                <p class="text-muted">The web application is built using AngularJS and allows the users to explore the crags and find information on the climbs they are interested in. It also allows editing of the existing data and contributions to the database.
                </p><p class="text-muted">   A lot of different technologies have been used to make the app fast, responsive and dynamic.</p>
                <div class="about-buttons">
                    <a href="/finder#/crags"
                       class="btn btn-primary btn-xl sr-button btn-zoom"
                       data-toggle="modal">Web Application</a>
                </div>
                <hr>
            </div>
        </div>
        <div class="text-center">
            <a href="#howItWorks" class="btn btn-primary  page-scroll">
                <i class="fa fa-2x fa-cog fa-spin sr-icons"></i>
            </a>
        </div>
    </div>
</section>

<!--
    ==========
       MAP
    ==========
              -->
<section class="bg-primarygrad" id="map">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h1 class="section-heading">Crag Map</h1>
                <hr>
                <p class="text-muted">Using the Google Maps JavaScript API a map was created to allow users to find crag locations on a familiar map.
                </p><p class="text-muted">   The map allows users to filter the crags down based on the type of climbing they are looking for. It also clusters markers together to make the map more responsive and user friendly.</p>
                <div class="about-buttons">
                    <a href="/map"
                       class="btn btn-default btn-xl sr-button btn-zoom">Crag Map</a>
                </div>
                <hr>
            </div>
        </div>
        <div class="text-center">
            <a href="#howItWorks" class="btn btn-default  page-scroll">
                <i class="fa fa-2x fa-cog text-primary fa-spin sr-icons"></i>
            </a>
        </div>
    </div>
</section>
<!--
    ==========
  ERD Modal
    ==========
              -->

<div id="ERDModal"
     class="modal fade "
     tabindex="-1"
     role="dialog"
     aria-labelledby="contributeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content col-sm-12">
            <div class="modal-header">
                <!-- Close Cross Top Right-->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--Modal Header-->
                <h3 id="contributeModalLabel" class="text-center">
                    Entity Relationship Diagram
                </h3>
            </div>
            <div class="modal-body">
                <img src="../resources/images/RockAdvisor_ERD_Standard.png"
                class="ERDImage">

            </div>
            <div class="modal-footer">
                <!--CANCEL BUTTON-->
                <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!--
    ==========
     API Modal
    ==========
              -->

<div id="APIModal"
     class="modal fade"
     tabindex="-1"
     role="dialog"
     aria-labelledby="contributeModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content col-sm-12">
            <div class="modal-header">
                <!-- Close Cross Top Right-->
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <!--Modal Header-->
                <h3 id="contributeModalLabel" class="text-center">
                    API
                </h3>
            </div>
            <div class="modal-body">
                <img src="../resources/images/API_Capture.PNG"
                     class="ERDImage">

            </div>
            <div class="modal-footer">
                <!--CANCEL BUTTON-->
                <button class="btn btn-default center-block" data-dismiss="modal" aria-hidden="true">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                    Close
                </button>
            </div>
        </div>
    </div>
</div>

<!--
    ==========
     WEBAPP
    ==========
              -->
<section id="conclusion" >
    <div class="container" >
        <div class="row col-lg-8 col-lg-offset-2 text-center">

            <h1 class="section-heading">Conclusion</h1>
            <hr>
            <p class="text-muted">Overall the project has been a great success. Although the initial project aims were not achieve, the scope of the project changed drastically and all of the revised aims have been met and many more beside that.</p>
            <p class="text-muted">What has been achieved is a ready-for-market product. There are many more features that could be added with ease over time should the development continue.</p>
            <p class="text-muted">More than 9000 lines of code spread over 70 unique files go into making the application run. Not only has a database been created with a powerful back-end but a dynamic AngularJS application has been created on top of that.</p>
            <p class="text-muted">Rock Advisor is a sophisticated, cutting-edge, full-stack web product that allows access to the database to a companion Android application.</p>

        </div>
    </div>
</section>


<!--
    ==========
      Footer
    ==========
              --> <!-- as if that wasn't obvious!-->

<footer>
    <hr>
    <p class="text-center">More information can be found on the <a href="/blog">Development Blog</a>.</p>
    <hr>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <p class="copyright text-muted">Copyright &copy; Rock Advisor 2017</p>
            </div>
        </div>
    </div>
</footer>

<!--
    ==========
      Scripts
    ==========
              -->

<!-- Bootstrap Core JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="../js/scrollreveal/scrollreveal.min.js"></script>
<script src="../js/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Theme JavaScript -->
<script src="../js/creative-theme/creative.min.js"></script>

</body>
</html>