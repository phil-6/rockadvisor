
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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="../angularApp/controllers/climbsCtrl.js"></script> <!-- load our controller -->
    <script src="../angularApp/services/climbService.js"></script> <!-- load our service -->
    <script src="../angularApp/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="climbApp" ng-controller="climbsController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Climbs Index</h2>
    </div>

    <!-- DELETE SUCCESS MESSAGE ===================================== -->
    <div class="alert alert-success" ng-show="showMessage">
        <p>{{message}}</p>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading">
        <i class="fa fa-space-shuttle fa-5x fa-spin"></i>
    </p>


    <!-- THE CLIMBS =============================================== -->
    <!-- hide these climbs if the loading variable is true -->
    <div  ng-hide="loading">
        <div ng-repeat="climb in climbsData">
            <h3>{{ climb.name }} </h3>
            <p>Crag: {{ climb.crag }}</p>
            <p>Grade: {{ climb.grade }}</p>

<!--            Commented for Deployment-->
<!--            <button type="button" class="btn btn-primary" ng-click="deleteClimb(climb.id)">Delete</button>-->

        </div>
        <div ng-show="!climbsData.length">
            <p>No climbs are available.</p>
        </div>
    </div>

</div>
</body>
</html>