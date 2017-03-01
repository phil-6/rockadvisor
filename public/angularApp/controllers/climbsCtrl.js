/**
 * Created by philr on 01/03/2017.
 */


angular.module('climbsCtrl', [])

// inject the Climb service into our controller
    .controller('climbsController', function ($scope, $http, Climb) {
        // object to hold all the data for the new climb form
        $scope.climbData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the climbs first and bind it to the $scope.climbs object
        // use the function we created in our service
        // GET ALL CLIMBS ==============
        Climb.get()
            .success(function (data) {
                $scope.climbs = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN CLIMB ================
        $scope.submitClimb = function () {
            $scope.loading = true;

            // save the climb. pass in climb data from the form
            // use the function we created in our service
            Climb.save($scope.climbData)
                .success(function (data) {

                    // if successful, we'll need to refresh the climb list
                    Climb.get()
                        .success(function (getData) {
                            $scope.climbs = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // function to handle deleting a climb
        // DELETE A CLIMB ====================================================
        $scope.deleteClimb = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Climb.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the climb list
                    Climb.get()
                        .success(function (getData) {
                            $scope.climbs = getData;
                            $scope.loading = false;
                        });

                });
        };

    });

