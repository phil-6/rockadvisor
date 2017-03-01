<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 24/02/2017
 * Time: 10:32
 -->

<!doctype html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Index</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <!-- load fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .crag       { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="angularApp/controllers/cragsCtrl.js"></script> <!-- load our controller -->
    <script src="angularApp/services/cragService.js"></script> <!-- load our service -->
    <script src="angularApp/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="cragApp" ng-controller="cragsController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Crags Index</h2>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><i class="fa fa-space-shuttle fa-5x fa-spin"></i></p>


    <!-- THE CRAGS =============================================== -->
    <!-- hide these crags if the loading variable is true -->
    <div class="crag" ng-hide="loading" ng-repeat="crag in crags">
        <h3>{{ crag.name }} </h3>
        <p>In Area: {{ crag.area }}</p>

    </div>

</div>
</body>
</html>