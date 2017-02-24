/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragsCtrl', [])

// inject the Crag service into our controller
    .controller('cragsController', function ($scope, $http, Crag) {
        // object to hold all the data for the new crag form
        $scope.cragData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the crags first and bind it to the $scope.crags object
        // use the function we created in our service
        // GET ALL CRAGS ==============
        Crag.get()
            .success(function (data) {
                $scope.crags = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN CRAG ================
        $scope.submitCrag = function () {
            $scope.loading = true;

            // save the crag. pass in crag data from the form
            // use the function we created in our service
            Crag.save($scope.cragData)
                .success(function (data) {

                    // if successful, we'll need to refresh the crag list
                    Crag.get()
                        .success(function (getData) {
                            $scope.crags = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // function to handle deleting a crag
        // DELETE A CRAG ====================================================
        $scope.deleteCrag = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Crag.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the crag list
                    Crag.get()
                        .success(function (getData) {
                            $scope.crags = getData;
                            $scope.loading = false;
                        });

                });
        };

    });

