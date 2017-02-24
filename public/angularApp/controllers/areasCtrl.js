/**
 * Created by philr on 24/02/2017.
 */

angular.module('areasCtrl', [])

// inject the Area service into our controller
    .controller('areasController', function ($scope, $http, Area) {
        // object to hold all the data for the new area form
        $scope.areaData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the areas first and bind it to the $scope.areas object
        // use the function we created in our service
        // GET ALL AREAS ==============
        Area.get()
            .success(function (data) {
                $scope.areas = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN AREA ================
        $scope.submitArea = function () {
            $scope.loading = true;

            // save the area. pass in area data from the form
            // use the function we created in our service
            Area.save($scope.areaData)
                .success(function (data) {

                    // if successful, we'll need to refresh the area list
                    Area.get()
                        .success(function (getData) {
                            $scope.areas = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // function to handle deleting a area
        // DELETE A AREA ====================================================
        $scope.deleteArea = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Area.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the area list
                    Area.get()
                        .success(function (getData) {
                            $scope.areas = getData;
                            $scope.loading = false;
                        });

                });
        };

    });

