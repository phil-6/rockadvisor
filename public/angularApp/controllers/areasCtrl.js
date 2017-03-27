/**
 * Created by philr on 24/02/2017.
 */

angular.module('areasCtrl', [])


// inject the Area service into our controller
    .controller('areasController', function ($scope, $http, AreaFactory, CragFactory) {
        // object to hold all the data for the new area form
        $scope.areasData = {};
        $scope.cragsData = {};
        $scope.areaId;

        $scope.showMessage = false;
        $scope.message = "";

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the areas first and bind it to the $scope.areas object
        // use the function we created in our service
        // GET ALL AREAS ==============
        AreaFactory.get()
            .success(function (data) {
                //console.log("ctrl");
                $scope.areasData = data;
                $scope.loading = false;
            });

        //Get Crags at Area
        // $scope.getCrags = function (id) {
        //     AreaFactory.getCrags(id)
        //         .success(function (data2) {
        //             console.log(data2);
        //             //$scope.cragsData = data2;
        //         });
        // };

        //Get All Crags
        // CragFactory.get()
        //     .success(function (data3) {
        //         //console.log("cragsCtrl:CragFactory.get");
        //         $scope.cragsData = data3;
        //         $scope.loading = false;
        //     });

        // function to handle deleting a area
        // DELETE A AREA ====================================================
        $scope.deleteArea = function (id) {
            // use the function we created in our service
            AreaFactory.destroy(id)
                .success(function (data) {

                    if (data.success) {

                        var i;
                        for (i = 0; i < $scope.areasData.length; i++) {
                            area = $scope.areasData[i];
                            if (area.id == id) {
                                break;
                            }
                        }

                        $scope.areasData.splice(i,1);

                        $scope.message = "Area was deleted";
                        $scope.showMessage = true;
                    } else {
                        $scope.message = "Area was not deleted - failed";
                        $scope.showMessage = true;
                    }

                });
        };

        $scope.buildAreaURL = function(id) {
            return "/areas/" + id;
        };

    });
