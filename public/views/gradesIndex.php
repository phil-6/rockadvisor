
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
    <!-- load fontawesome -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">
    <style>
        body        { padding-top:30px; }
        form        { padding-bottom:20px; }
        .grade       { padding-bottom:20px; }
    </style>

    <!-- JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script> <!-- load angular -->

    <!-- ANGULAR -->
    <!-- all angular resources will be loaded from the /public folder -->
    <script src="../angularApp/controllers/gradesCtrl.js"></script> <!-- load our controller -->
    <script src="../angularApp/services/gradeService.js"></script> <!-- load our service -->
    <script src="../angularApp/app.js"></script> <!-- load our application -->


</head>
<!-- declare our angular app and controller -->
<body class="container" ng-app="gradeApp" ng-controller="gradesController"> <div class="col-md-8 col-md-offset-2">

    <!-- PAGE TITLE =============================================== -->
    <div class="page-header">
        <h2>Grades Index</h2>
    </div>

    <!-- LOADING ICON =============================================== -->
    <!-- show loading icon if the loading variable is set to true -->
    <p class="text-center" ng-show="loading">
        <i class="fa fa-space-shuttle fa-5x fa-spin"></i>
    </p>


    <!-- THE CRAGS =============================================== -->
    <!-- hide these crags if the loading variable is true -->
    <div ng-hide="loading">
        <div ng-repeat="grade in gradesData" >
            <hr>
            <p>ID: {{ grade.id }} </p>
            <p>TypeID: {{ grade.climbTypeId }}</p>
            <p>Tech: {{ grade.technicalGrade }}</p>
            <p>Sev: {{ grade.severityGrade }}</p>
        </div>

        <div ng-show="!gradesData.length">
            <p>No gradess are available.</p>
        </div>
    </div>

</div>
</body>
</html>