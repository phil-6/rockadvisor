/**
 * Created by philr on 08/03/2017.
 */

angular.module('cragFormCtrl', [])
    .controller('cragFormController', function ($scope, $http, CragFactory, AreaFactory, $timeout) {

        $scope.formData = {};
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        /*$scope.latregex = "^(\+|-)?(?:90(?:(?:\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,6})?))$";
         $scope.lngregex = "^(\+|-)?(?:180(?:(?:\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,6})?))$";
         $scope.orientationregex = "N|S|E|W|NE|SE|NW|SW|NNE|ENE|SSE|ESE|NNW|WNW|SSW|WSW";*/

       /* $scope.areasData = {};
        AreaFactory.get()
            .success(function (data2) {
                //console.log("ctrl");
                $scope.areasData = data2;
                $scope.loading = false;
            });*/


        $scope.processCragForm = function (isValid) {
            alert('cool-');

            /*$scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;
            $scope.errorShowing = false;
            if (isValid) {
                $scope.submitButtonHidden = true;
                $scope.progressMessageShowing = true;
                $scope.errorShowing = false;

                CragFactory.save($scope.formData)
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
            }*/
        };
    });