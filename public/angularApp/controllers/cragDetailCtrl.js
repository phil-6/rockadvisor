/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragDetailCtrl', [])

// inject the Crag service into our controller
    .controller('cragDetailController', function ($scope, $http, $stateParams, CragFactory) {
        // object to hold all the data for the new crag form
        $scope.cragId = $stateParams.cragID;
        $scope.cragData = {};
        $scope.climbs = {}

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the crags first and bind it to the $scope.crags object
        // use the function we created in our service
        // GET ALL CRAGS ==============
        CragFactory.getDetail($scope.cragId)
            .success(function (data) {
                //console.log("ctrl");
                $scope.cragData = data;
                $scope.loading = false;
            });

        CragFactory.getClimbs($scope.cragId)
            .success(function (data) {
                //console.log("ctrl");
                $scope.climbs = data;
                $scope.loading = false;
            });
    });

