<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 24/02/2017
 * Time: 10:32
 -->

<!doctype html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Rock Advisor Crags</title>

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

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="angularApp/controllers/cragsCtrl.js"></script> <!-- load our controller -->
    <script src="angularApp/services/cragService.js"></script> <!-- load our service -->
    <script src="angularApp/app.js"></script> <!-- load our application -->

    <!-- Google Analytics -->
    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-92612290-1', 'auto');
        ga('send', 'pageview');

    </script>


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="cragApp" ng-controller="cragsController">
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
                    <a class="page-scroll" href="../#contact">Contribute</a>
                </li>
                <li>
                    <a class="page-scroll" href="../#howItWorks">How It Works</a>
                </li>
                <li>
                    <a class="page-scroll" href="/map">Crag Map</a>
                </li>
                <li>
                    <a class="page-scroll" href="/blog">Development</a>
                </li>

            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<div class="col-md-8 col-md-offset-2">


    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Crags Index</h2>
    </div>

    <div class="alert alert-success" ng-show="showMessage">
        <p>{{message}}</p>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading">
        <i class="fa fa-space-shuttle fa-5x fa-spin"></i>
    </p>


    <!-- THE CRAGS =============================================== -->
    <!-- hide these crags if the loading variable is true -->
    <div ng-hide="loading">
        <div ng-repeat="crag in cragsData" >
            <h3>{{ crag.name }} : {{crag.id}}</h3>
            <p>In Area: {{ crag.area }}</p>

            <button type="button" class="btn btn-primary" ng-click="deleteCrag(crag.id)">Delete</button>
            <a href="{{ buildCragURL(crag.id) }}" type="button" class="btn btn-primary">Show</a>
        </div>

        <div ng-show="!cragsData.length">
            <p>No crags are available.</p>
        </div>
    </div>



</div>
</body>
</html>