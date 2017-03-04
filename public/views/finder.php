
<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 04/03/2017
 * Time: 12:26
-->
<!--
---------------------------------------
This is going to be our master template
For the "finder" section of the website
---------------------------------------
-->

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Crag Finder</title>

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
    <link href="../css/creative.min.css" rel="stylesheet">

    <!-- jQuery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

    <!-- AngularJS -->
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.2/angular.min.js"></script>
    <!-- AngularJS UI-Router -->
    <script src="//unpkg.com/angular-ui-router/release/angular-ui-router.min.js"></script>

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <!--<script src="../angularApp/controllers/cragsCtrl.js"></script> <!-- load our controller -->
    <!--<script src="../angularApp/services/cragService.js"></script> <!-- load our service -->
    <script src="../angularApp/app.js"></script> <!-- load our application -->

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
<!-- declare our angular app and controller -->
<body class="container" ng-app="finderApp">
<!--
    ==========
    Navigation
    ==========
              -->
<nav id="mainNav" class="navbar navbar-default navbar-fixed-top ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button"
                    class="navbar-toggle collapsed"
                    data-toggle="collapse"
                    data-target="#rockAdvisorNavbar">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="/">Rock Advisor</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="rockAdvisorNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" ui-sref="home">Home</a>
                </li>
                <li>
                    <a class="page-scroll" ui-sref="map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" ui-sref="blog">Development</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>
<!--
    ==========
      Main
    ==========
              -->
<!-- MAIN CONTENT -->
<section>
    <div class="container">

        <!-- THIS IS WHERE WE WILL INJECT OUR CONTENT ============================== -->
        <div ui-view></div>

    </div>
</section>



<!--
    ==========
      Footer
    ==========
              -->

<hr>
<footer>
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
<script src="../js/formValidation.js"></script>

<!-- Theme JavaScript -->
<script src="../js/creative-theme/creative.min.js"></script>

</body>
</html>