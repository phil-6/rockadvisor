/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragDetailCtrl', [])

// inject the Crag service into our controller
    .controller('cragDetailController', function ($scope, $http, $stateParams, CragFactory) {
        // object to hold all the data for the new crag form
        $scope.cragId = $stateParams.cragID;
        $scope.cragData = {};
        $scope.climbData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        //get Crag Details
        CragFactory.getDetail($scope.cragId)
            .success(function (data) {
                //console.log("ctrl");
                $scope.cragData = data;
                $scope.loading = false;
            });

        //Get Climbs at Crag
        CragFactory.getClimbs($scope.cragId)
            .success(function (data2) {
                //console.log(data2);
                $scope.climbData = data2;
                $scope.loading = false;
            });
    });

