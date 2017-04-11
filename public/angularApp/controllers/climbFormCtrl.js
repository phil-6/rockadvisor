/**
 * Created by philr on 09/03/2017.
 */

angular.module('climbFormCtrl', [])
    .controller('climbFormController', function ($scope, $http, ClimbFactory, CragFactory, GradeFactory, $timeout) {

        $scope.formData = {};
        $scope.showCurrentClimbs = false;
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.dateregex = "^(?:(?:31(\\/|-|\\.)(?:0?[13578]|1[02]))\\1|(?:(?:29|30)(\\/|-|\\.)(?:0?[1,3-9]|1[0-2])\\2))(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$|^(?:29(\\/|-|\\.)0?2\\3(?:(?:(?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\\d|2[0-8])(\\/|-|\\.)(?:(?:0?[1-9])|(?:1[0-2]))\\4(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$";
        //console.log("ctrl-here");
        // loading variable to show the spinning loading icon
        $scope.loading = true;

        /*Get All Crags*/
        $scope.cragsData = {};
        CragFactory.get()
            .success(function (data2) {
                $scope.cragsData = data2;

            });

        /*Get All Grades*/
        $scope.gradesData = {};
        GradeFactory.get()
            .success(function (data3) {
                $scope.gradesData = data3;
                $scope.loading = false;
            });

        /*Get Climbs at Crag*/
        $scope.climbsAtCrag = {};
        $scope.cragSelected = function () {
            CragFactory.getClimbs($scope.formData.crag)
                .success(function (data4) {
                    $scope.climbsAtCrag = data4;
                });
            if ($scope.climbsAtCrag) {
                $scope.showCurrentClimbs = true;
            }
        };

        /*Grade Selector*/
        $scope.technialOnlySelect = false;
        $scope.techAndSevSelect = false;

        $scope.gradeTypeSelected = function () {
            $scope.technialOnlySelect = false;
            $scope.techAndSevSelect = false;
            $timeout(function () {
                if ($scope.filter.gradeType === 1) {
                    //British Trad
                    //console.log("British Trad");
                    $scope.techAndSevSelect = true;
                } else if ($scope.filter.gradeType === 2) {
                    //French Sport
                    //console.log("French Sport");
                    $scope.technialOnlySelect = true;
                } else if ($scope.filter.gradeType === 3) {
                    //Bouldering V
                    //console.log("Bouldering V");
                    $scope.technialOnlySelect = true;
                } else if ($scope.filter.gradeType === 4) {
                    //Bouldering Font
                    //console.log("Bouldering Font");
                    $scope.technialOnlySelect = true;
                } else if ($scope.filter.gradeType === 5) {
                    //DWS
                    //console.log("DWS");
                    $scope.techAndSevSelect = true;
                } else {
                    $scope.errorShowing = true;
                    $scope.technialOnlySelect = false;
                    $scope.techAndSevSelect = false;
                }
            },250);
        };


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
                //console.log($scope.formData);

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