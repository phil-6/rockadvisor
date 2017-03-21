/**
 * Created by philr on 08/03/2017.
 */

angular.module('cragFormCtrl', [])
    .controller('cragFormController', function ($scope, $http, CragFactory, AreaFactory, OrientationFactory, RockTypeFactory, $timeout) {

        $scope.formData = {};
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.latregex = "^(\\+|-)?(?:90(?:(?:\\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\\.[0-9]{1,6})?))$";
        $scope.lngregex = "^(\\+|-)?(?:180(?:(?:\\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\\.[0-9]{1,6})?))$";
        //$scope.regexTest = "\\d+";

        $scope.areasData = {};
        AreaFactory.get()
            .success(function (data2) {
                //console.log("ctrl");
                $scope.areasData = data2;
            });

        $scope.orientationsData = {};
        OrientationFactory.get()
            .success(function (data3) {
                //console.log("ctrl");
                $scope.orientationsData = data3;
            });

        $scope.rockTypesData = {};
        RockTypeFactory.get()
            .success(function (data4) {
                //console.log("ctrl");
                $scope.rockTypesData = data4;
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

                CragFactory.save($scope.formData)
                    .success(function (data) {
                        //console.log(data); //debugging
                        if (data.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;

                            //Paused after success
                            $timeout(function () {
                                $scope.formData = {};
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