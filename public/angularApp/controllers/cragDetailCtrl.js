/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragDetailCtrl', [])

// inject the Crag service into our controller
    .controller('cragDetailController', function ($scope, $http, $stateParams, CragFactory, AreaFactory, OrientationFactory, RockTypeFactory, $timeout) {
        // object to hold all the data for the new crag form
        $scope.cragId = $stateParams.cragID;
        $scope.cragData = {};
        $scope.climbData = {};


        // loading variable to show the spinning loading icon
        $scope.loading = true;

        //get Crag Details
        CragFactory.getDetail($scope.cragId)
            .success(function (data) {
                //console.log(data);
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


        /**
         * EDIT CRAG
         */

        $scope.formData = {};
        //populate form with crag information
        $scope.fillForm = function(){
            console.log("Here")
            $scope.formData.cragArea = $scope.cragData.area_id;
            $scope.formData.cragLat = $scope.cragData.lat;
            $scope.formData.cragLng = $scope.cragData.lng;
            $scope.formData.cragName = $scope.cragData.name;
            $scope.formData.cragDescription = $scope.cragData.description;
            $scope.formData.cragApproach = $scope.cragData.approachDetails;
            $scope.formData.cragAccess = $scope.cragData.accessInformation;
            $scope.formData.cragTidalRange = $scope.cragData.tidalRange;
            $scope.formData.cragApproachTime = $scope.cragData.approachTime;
            $scope.formData.cragRockType = $scope.cragData.rockType_id;
            $scope.formData.cragOrientation = $scope.cragData.orientation_id;

            if($scope.cragData.midges == 1){
                $scope.formData.midges = true;
            }else{$scope.formData.midges = false}
            if($scope.cragData.seepage == 1){
                $scope.formData.seepage = true;
            }else{$scope.formData.seepage = false}
            if($scope.cragData.sheltered == 1){
                $scope.formData.sheltered = true;
            }else{$scope.formData.sheltered = false}

        };

        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.latregex = "^(\\+|-)?(?:90(?:(?:\\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\\.[0-9]{1,6})?))$";
        $scope.lngregex = "^(\\+|-)?(?:180(?:(?:\\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\\.[0-9]{1,6})?))$";


        $scope.areasData = {};
        AreaFactory.get()
            .success(function (data3) {
                //console.log("ctrl");
                $scope.areasData = data3;
            });

        $scope.orientationsData = {};
        OrientationFactory.get()
            .success(function (data4) {
                //console.log("ctrl");
                $scope.orientationsData = data4;
            });

        $scope.rockTypesData = {};
        RockTypeFactory.get()
            .success(function (data5) {
                //console.log("ctrl");
                $scope.rockTypesData = data5;
            });


        $scope.processCragForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;

            if($scope.formData.midges == true){
                $scope.formData.midges = 1;
            }else{$scope.formData.midges = 0}
            if($scope.formData.seepage == true){
                $scope.formData.seepage = 1;
            }else{$scope.formData.seepage = 0}
            if($scope.formData.sheltered == true){
                $scope.formData.sheltered = 1;
            }else{$scope.formData.sheltered = 0}
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;

                CragFactory.update($scope.formData, $scope.cragData.id)
                    .success(function (data6) {
                        //console.log(data); //debugging
                        if (data6.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;
                            //get updated crag information
                            CragFactory.getDetail($scope.cragId)
                                .success(function (data7) {
                                    //console.log(data);
                                    $scope.cragData = data7;
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

