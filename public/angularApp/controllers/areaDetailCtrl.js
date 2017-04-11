/**
 * Created by philr on 05/03/2017.
 */
angular.module('areaDetailCtrl', [])
    .controller('areaDetailController', function(
        $scope,
        $http,
        $stateParams,
        AreaFactory,
        $timeout ){


        $scope.areaId = $stateParams.areaID;
        $scope.areaData = {};
        $scope.cragData = {};
        $scope.childAreas = {};
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        //Get Area Details
        AreaFactory.getDetail($scope.areaId)
            .success(function (data) {
                $scope.areaData = data;
                //console.log('data');
                //console.log($scope.areaData);
                $scope.loading = false;
            });

        //Get Crags at Area
        AreaFactory.getCrags($scope.areaId)
            .success(function (data1) {
                $scope.cragData = data1;
                $scope.loading = false;
            });

        //Get Areas at Area
        AreaFactory.getChildAreas($scope.areaId)
            .success(function (data2) {
                $scope.childAreas = data2;
                $scope.loading = false;
            });

        //Toggle Controls
        $scope.editButtonShowing = false;
        $scope.showEditControls = function(){
            $scope.editButtonShowing = true;
        };
        $scope.hideEditControls = function(){
            $scope.editButtonShowing = false;
        };


        /**
         * EDIT AREA
         */

        $scope.formData = {};
        //populate form with crag information
        $scope.fillForm = function() {
            $scope.formData.parentArea = $scope.areaData.parentArea;
            //console.log($scope.formData.parentArea, $scope.areaData.parentArea );
            $scope.formData.areaName = $scope.areaData.name;
            $scope.formData.areaDescription = $scope.areaData.description;
        };

        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.submitDisabled = false;

        $scope.disableButton = function() {
            $scope.sumbitDisabled = true;
        };



        //populate areas list in form
        $scope.areasData = {};
        AreaFactory.get()
            .success(function (data3) {
                $scope.areasData = data3;
            });


        $scope.processAreaForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.submitDisabled = false;
            $scope.progressMessageShowing = true;
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;
                //console.log("$scope.areaData.id");
                //console.log($scope.areaData.id);
                //console.log("$scope.areaId");
                //console.log($scope.areaId);
                //console.log("$scope.formData");
                //console.log($scope.formData);

                AreaFactory.update($scope.formData, $scope.areaData.id)
                    .success(function (data4) {
                        //console.log("data4");
                        //console.log(data4); //debugging
                        if (data4.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;

                            //Refresh area list.
                            //Doesn't work at the moment
                            AreaFactory.get()
                                .success(function (data5) {
                                    $scope.areasData = data5;
                                });

                            //get updated area information
                            AreaFactory.getDetail($scope.areaId)
                                .success(function (data6) {
                                    console.log('data6');
                                    console.log(data6);
                                    $scope.areaData = data6;
                                    $scope.loading = false;
                                });

                            //Paused after success
                            $timeout(function () {
                                $scope.fillForm();
                                $scope.submitButtonHidden = false;
                                //$scope.progressMessageShowing = false;
                                $scope.resultShowing = false;
                                $scope.submitted = false;
                            }, 2000);

                        } else {
                            $scope.submitButtonHidden = false;
                            $scope.progressMessageShowing = false;
                            $scope.errorShowing = true;
                        }
                    });
            } else { //on validate failure
                $timeout(function () {
                    $scope.submitButtonHidden = false;
                    $scope.progressMessageShowing = false;
                    $scope.errorShowing = true;
                }, 1000);
            }
        };
    });
