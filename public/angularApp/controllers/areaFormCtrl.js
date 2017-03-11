/**
 * Created by philr on 09/03/2017.
 */

angular.module('areaFormCtrl', [])
    .controller('areaFormController', function ($scope, $http, AreaFactory, $timeout) {

        $scope.formData = {};
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.submitDisabled = false;

        $scope.disableButton = function() {
            $scope.sumbitDisabled = true;
        }



        $scope.areasData = {};
        AreaFactory.get()
            .success(function (data2) {
                $scope.areasData = data2;
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

                AreaFactory.save($scope.formData)
                    .success(function (data) {
                        //console.log(data); //debugging
                        if (data.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;

                            //Refresh area list.
                            //Doesn't work at the moment
                            AreaFactory.get()
                                .success(function (data2) {
                                    $scope.areasData = data2;
                                });

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