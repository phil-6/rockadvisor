/**
 * Created by philr on 01/03/2017.
 */


angular.module('climbsCtrl', [])

// inject the Climb service into our controller
    .controller('climbsController', function ($scope, $http, ClimbFactory) {
        // object to hold all the data for the new climb form
        $scope.climbsData = {};
        $scope.showMessage = false;
        $scope.message = "";

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the climbs first and bind it to the $scope.climbs object
        // use the function we created in our service
        // GET ALL CLIMBS ==============
        ClimbFactory.get()
            .success(function (data) {
                //console.log("ctrl");
                $scope.climbsData = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN CLIMB ================
        // $scope.submitClimb = function () {
        //     $scope.loading = true;

        //     // save the climb. pass in climb data from the form
        //     // use the function we created in our service
        //     ClimbFactory.save($scope.climbData)
        //         .success(function (data) {

        //             // if successful, we'll need to refresh the climb list
        //             Climb.get()
        //                 .success(function (getData) {
        //                     $scope.climbs = getData;
        //                     $scope.loading = false;
        //                 });

        //         })
        //         .error(function (data) {
        //             console.log(data);
        //         });
        // };

        // function to handle deleting a climb
        // DELETE A CLIMB ====================================================
        $scope.deleteClimb = function (id) {
            // use the function we created in our service
            ClimbFactory.destroy(id)
                .success(function (data) {

                    if (data.success) {

                        var i;
                        for (i = 0; i < $scope.climbsData.length; i++) {
                            climb = $scope.climbsData[i];
                            if (climb.id == id) {
                                break;
                            }
                        }

                        $scope.climbsData.splice(i,1);

                        $scope.message = "Climb was deleted";
                        $scope.showMessage = true;
                    } else {
                        $scope.message = "Climb was not deleted - failed";
                        $scope.showMessage = true;
                    }

                });
        };

        $scope.buildClimbURL = function(id) {
            return "/climbs/" + id;
        };

    });