
<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 01/03/2017
 * Time: 10:43
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
        .climb       { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="angularApp/controllers/climbsCtrl.js"></script> <!-- load our controller -->
    <script src="angularApp/services/climbService.js"></script> <!-- load our service -->
    <script src="angularApp/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="climbApp" ng-controller="climbsController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Climbs Index</h2>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><i class="fa fa-space-shuttle fa-5x fa-spin"></i></p>


    <!-- THE CLIMBS =============================================== -->
    <!-- hide these climbs if the loading variable is true -->
    <div class="climb" ng-hide="loading" ng-repeat="climb in climbs">
        <h3>{{ climb.name }} </h3>
        <p>Crag: {{ climb.crag }}</p>
        <p>Grade: {{ climb.grade }}</p>

    </div>

</div>
</body>
</html>