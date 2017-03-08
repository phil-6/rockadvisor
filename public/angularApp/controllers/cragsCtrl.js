/**
 * Created by philr on 24/02/2017.
 */

angular
    .module('cragsCtrl', [])

// inject the Crag service into our controller
    .controller('cragsController', function ($scope, $http, CragFactory) {
        // object to hold all the data for the new crag form
        $scope.cragsData = {};
        $scope.showMessage = false;
        $scope.message = "";

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the crags first and bind it to the $scope.crags object
        // use the function we created in our service
        // GET ALL CRAGS ==============
        CragFactory.get()
            .success(function (data) {
                console.log("cragsCtrl:CragFactory.get");
                $scope.cragsData = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN CRAG ================
        $scope.submitCrag = function () {
            $scope.loading = true;

            // save the crag. pass in crag data from the form
            // use the function we created in our service
            CragFactory.save($scope.cragData)
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
            // use the function we created in our service
            CragFactory.destroy(id)
                .success(function (data) {

                    if (data.success) {
                        
                        var i;
                        for (i = 0; i < $scope.cragsData.length; i++) {
                            crag = $scope.cragsData[i];
                            if (crag.id == id) {
                                break;
                            }
                        }

                        $scope.cragsData.splice(i,1);

                        $scope.message = "Crag was deleted";
                        $scope.showMessage = true;
                    } else {
                        $scope.message = "Crag was not deleted - failed";
                        $scope.showMessage = true;
                    }

                });
        };

        $scope.buildCragURL = function(id) {
            return "/crags/" + id;
        };

    });

