/**
 * Created by philr on 05/03/2017.
 */
angular.module('areaDetailCtrl', [])
    .controller('areaDetailController', function($scope, $http, $stateParams, AreaFactory ){
        $scope.areaId = $stateParams.areaID;
        $scope.areaData = {};
        $scope.cragData = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        //Get Area Details
        AreaFactory.getDetail($scope.areaId)
            .success(function (data) {
                console.log("ctrlHere");
                $scope.areaData = data;
                $scope.loading = false;
            });

        //Get Crags at Area
        AreaFactory.getCrags($scope.areaId)
            .success(function (data2) {
                console.log("I'm here Phil" + data2);
                $scope.cragData = data2;
                $scope.loading = false;
            });
    });
