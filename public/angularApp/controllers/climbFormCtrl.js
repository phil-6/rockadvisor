/**
 * Created by philr on 09/03/2017.
 */

angular.module('climbFormCtrl', [])
    .controller('climbFormController', function ($scope, $http, ClimbFactory, CragFactory, GradeFactory, $timeout) {

        $scope.formData = {};
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        //console.log("ctrl-here");

        $scope.cragsData = {};
        CragFactory.get()
            .success(function (data2) {
                $scope.cragsData = data2;
            });

        $scope.gradesData = {};
        GradeFactory.get()
            .success(function (data3) {
                $scope.gradesData = data3;
            });


        $scope.processClimbForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;

                ClimbFactory.save($scope.formData)
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