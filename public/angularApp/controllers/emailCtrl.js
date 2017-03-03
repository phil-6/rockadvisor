/**
 * Created by philr on 27/02/2017.
 */
angular.module('emailCtrl', [])
    .controller('contributeController', function ($scope, $http, EmailFactory, $timeout) {
        $scope.result = 'hidden';
        $scope.resultMessage;
        $scope.formData = {}; //formData is an object holding the name, email, and message
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.submitted = false; //used so that form errors are shown only after the form has been submitted


        $scope.submitEmail = function () {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;

            EmailFactory.submit($scope.formData)
                .success(function(data){
                    //console.log(data); //debugging
                    if (data.success) { //success comes from the return json object
                        $scope.submitButtonHidden = true;
                        $scope.progressMessageShowing = false;
                        // $scope.resultMessage = "Success!";
                        // $scope.result = 'bg-success';
                        $scope.resultShowing = true;

                        // $scope.contributeForm.$setPristine(); //Not working
                        //Paused after success
                        $timeout(function(){
                            $scope.formData = {};
                            $scope.submitButtonHidden = false;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = false;

                        },2000);

                    } else {
                        $scope.submitButtonHidden = false;
                        $scope.progressMessageShowing = false;
                        $scope.resultMessage = "Uh Oh! Something went wrong. Please try again";
                        $scope.result = 'bg-danger';
                    }
                });

        }

    });
