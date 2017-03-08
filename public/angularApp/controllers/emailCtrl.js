/**
 * Created by philr on 27/02/2017.
 */
angular.module('emailCtrl', [])
    .controller('contributeController', function ($scope, $http, EmailFactory, $timeout) {

        $scope.formData = {}; //formData is an object holding the name, email, and message
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false; //used so that form errors are shown only after the form has been submitted


        $scope.submitEmail = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;
            $scope.errorShowing = false;
            if (isValid) {
                $scope.submitted = true;
                $scope.submitButtonHidden = true;
                $scope.progressMessageShowing = true;
                $scope.errorShowing = false;

                EmailFactory.submit($scope.formData)
                    .success(function (data) {
                        //console.log(data); //debugging
                        if (data.success) { //success comes from the return json object
                            $scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;


                            //Paused after success
                            $timeout(function () {
                                $scope.formData = {};
                                $scope.submitButtonHidden = false;
                                $scope.progressMessageShowing = false;
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

        }

    });
