
<!--
 * Created by PhpStorm.
 * User: philr
 * Date: 26/02/2017
 * Time: 22:48
 -->

<!doctype html>
<html lang="en">
<head> <meta charset="UTF-8">
    <title>Index</title>

    <!-- CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css"> <!-- load bootstrap via cdn -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"> <!-- load fontawesome -->
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .grade       { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.8/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="angularApp/controllers/gradesCtrl.js"></script> <!-- load our controller -->
    <script src="angularApp/services/gradeService.js"></script> <!-- load our service -->
    <script src="angularApp/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="gradeApp" ng-controller="gradesController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Grades Index</h2>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading"><span class="fa fa-meh-o fa-5x fa-spin"></span></p>


    <!-- THE GRADES =============================================== -->
    <!-- hide these grades if the loading variable is true -->
    <div class="grade" ng-hide="loading" ng-repeat="grade in grades">
        <p>ID: {{ grade.id }} </p>
        <p>TypeID {{ grade.climbTypeId }}</p>
        <p>Tech: {{ grade.technical_grade }}</p>
        <p>Sev: {{ grade.severity_grade }}</p>

    </div>

</div>
</body>
</html>