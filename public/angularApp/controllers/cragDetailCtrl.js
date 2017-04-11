/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragDetailCtrl', [])

// inject the Crag service into our controller
    .controller('cragDetailController', function ($scope,
                                                  $http,
                                                  $stateParams,
                                                  CragFactory,
                                                  AreaFactory,
                                                  ClimbFactory,
                                                  OrientationFactory,
                                                  RockTypeFactory,
                                                  GradeFactory,
                                                  $filter,
                                                  $timeout) {


        // object to hold all the data for the new crag form
        $scope.cragId = $stateParams.cragID;
        $scope.cragData = {};
        $scope.climbData = {};
        $scope.showMessage = false;


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
                //console.log($scope.climbData[0]);
                $scope.loading = false;
            });

        //Refresh Climbs
        $scope.refreshClimbs = function(){
            $scope.showUpdateMessage = false;
            CragFactory.getClimbs($scope.cragId)
                .success(function (data3) {
                    //console.log(data2);
                    $scope.climbData = data3;
                    //console.log($scope.climbData[0]);
                    $scope.loading = false;
                });
        };

        //Toggle Controls
        $scope.editButtonShowing = false;
        $scope.showEditControls = function(){
            $scope.editButtonShowing = true;
        };
        $scope.hideEditControls = function(){
            $scope.editButtonShowing = false;
        };




        /**
         * EDIT CRAG
         */
        // EDIT CRAG ====================================================

        $scope.formData = {};
        //populate form with crag information
        $scope.fillForm = function () {
            //console.log("Here")
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

            if ($scope.cragData.midges === 1) {
                $scope.formData.midges = true;
            } else {
                $scope.formData.midges = false
            }
            if ($scope.cragData.seepage === 1) {
                $scope.formData.seepage = true;
            } else {
                $scope.formData.seepage = false
            }
            if ($scope.cragData.sheltered === 1) {
                $scope.formData.sheltered = true;
            } else {
                $scope.formData.sheltered = false
            }

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
            .success(function (data4) {
                //console.log("ctrl");
                $scope.areasData = data4;
            });

        $scope.orientationsData = {};
        OrientationFactory.get()
            .success(function (data5) {
                //console.log("ctrl");
                $scope.orientationsData = data5;
            });

        $scope.rockTypesData = {};
        RockTypeFactory.get()
            .success(function (data6) {
                //console.log("ctrl");
                $scope.rockTypesData = data6;
            });


        $scope.processCragForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;

            if ($scope.formData.midges === true) {
                $scope.formData.midges = 1;
            } else {
                $scope.formData.midges = 0
            }
            if ($scope.formData.seepage === true) {
                $scope.formData.seepage = 1;
            } else {
                $scope.formData.seepage = 0
            }
            if ($scope.formData.sheltered === true) {
                $scope.formData.sheltered = 1;
            } else {
                $scope.formData.sheltered = 0
            }
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;

                CragFactory.update($scope.formData, $scope.cragData.id)
                    .success(function (data7) {
                        //console.log(data); //debugging
                        if (data7.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;
                            //get updated crag information
                            CragFactory.getDetail($scope.cragId)
                                .success(function (data8) {
                                    //console.log(data);
                                    $scope.cragData = data8;
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

        /**
         * EDIT Climb
         */
        // EDIT A CLIMB ====================================================

        $scope.climbFormData = {};
        $scope.fillClimbForm = function ($climb) {
            //console.log("Here");
            //console.log($climb);
            $scope.thisClimb = $climb;
            $scope.loadingGrade = true;
            $scope.climbFormData.grade = $climb.grade_id;
            $scope.thisGrade = {};
            GradeFactory.getDetail($climb.grade_id)
                .success(function (data9) {
                    $scope.thisGrade = data9;
                    //console.log($scope.thisGrade);
                    $scope.filterGradeGradeType = $scope.thisGrade.climbTypeId;
                    $scope.filterGradeSeverity = $scope.thisGrade.severityGrade;
                    $scope.gradeTypeSelected();
                    $scope.loadingGrade = false;

                });
            $scope.climbFormData.crag = $climb.crag_id;
            $scope.climbFormData.climbName = $climb.name;
            $scope.climbFormData.climbDescription = $climb.description;
            $scope.climbFormData.length = $climb.length;
            $scope.climbFormData.pitches = $climb.pitches;
            $scope.climbFormData.firstAscent = $climb.firstAscent;
            $scope.climbFormData.firstAscentDate = $filter('date')(new Date($climb.firstAscentDate), "dd/MM/yyyy");
            $scope.climbFormData.topoNumber = $climb.topoNumber;
            $scope.climbFormData.topo = $climb.topo_id;

        };


        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.submitted = false;
        $scope.dateregex = "^(?:(?:31(\\/|-|\\.)(?:0?[13578]|1[02]))\\1|(?:(?:29|30)(\\/|-|\\.)(?:0?[1,3-9]|1[0-2])\\2))(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$|^(?:29(\\/|-|\\.)0?2\\3(?:(?:(?:1[6-9]|[2-9]\\d)?(?:0[48]|[2468][048]|[13579][26])|(?:(?:16|[2468][048]|[3579][26])00))))$|^(?:0?[1-9]|1\\d|2[0-8])(\\/|-|\\.)(?:(?:0?[1-9])|(?:1[0-2]))\\4(?:(?:1[6-9]|[2-9]\\d)?\\d{2})$";
        //console.log("ctrl-here");

        $scope.cragsData = {};
        CragFactory.get()
            .success(function (data10) {
                $scope.cragsData = data10;
            });

        $scope.gradesData = {};
        GradeFactory.get()
            .success(function (data11) {
                $scope.gradesData = data11;
            });

        /*Grade Selector*/
        $scope.technicalOnlySelect = false;
        $scope.techAndSevSelect = false;


        $scope.gradeTypeSelected = function () {
            $scope.technicalOnlySelect = false;
            $scope.techAndSevSelect = false;
            $scope.loadingGrade = true;

            $timeout(function () {
                console.log($scope.filterGradeGradeType);
                if ($scope.filterGradeGradeType === 1) {
                    //British Trad
                    console.log("British Trad");
                    $scope.techAndSevSelect = true;
                    $scope.loadingGrade = false;
                } else if ($scope.filterGradeGradeType === 2) {
                    //French Sport
                    console.log("French Sport");
                    $scope.technicalOnlySelect = true;
                    $scope.techAndSevSelect = false;
                    $scope.loadingGrade = false;
                } else if ($scope.filterGradeGradeType === 3) {
                    //Bouldering V
                    console.log("Bouldering V");
                    $scope.technicalOnlySelect = true;
                    $scope.techAndSevSelect = false;
                    $scope.loadingGrade = false;
                } else if ($scope.filterGradeGradeType === 4) {
                    //Bouldering Font
                    console.log("Bouldering Font");
                    $scope.technicalOnlySelect = true;
                    $scope.techAndSevSelect = false;
                    $scope.loadingGrade = false;
                } else if ($scope.filterGradeGradeType === 5) {
                    //DWS
                    console.log("DWS");
                    $scope.techAndSevSelect = true;
                    $scope.loadingGrade = false;
                } else {
                    $scope.errorShowing = true;
                    $scope.technicalOnlySelect = false;
                    $scope.techAndSevSelect = false;
                    console.log("here");
                }
            }, 250);
        };


        $scope.processClimbForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;
            //console.log("nowhere");
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;
                //console.log($scope.thisClimb);
                //console.log($scope.climbFormData);
                //console.log($scope.thisClimb.id);

                ClimbFactory.update($scope.climbFormData, $scope.thisClimb.id)
                    .success(function (data12) {
                        //console.log(data10); //debugging
                        if (data12.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;
                            $scope.showUpdateMessage = true;
                            ClimbFactory.getDetail($scope.thisClimb.id)
                                .success(function(data13){
                                    $scope.thisClimb = data13;
                                });

                            //Paused after success
                            $timeout(function () {

                                $scope.fillClimbForm($scope.thisClimb);
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

        /**
         * DELETE CLIMB
         */
        // DELETE A CLIMB ====================================================
        $scope.deleteClimb = function (id) {
            // use the function we created in our service
            ClimbFactory.destroy(id)
                .success(function (data14) {

                    if (data14.success) {

                        var i;
                        for (i = 0; i < $scope.climbData.length; i++) {
                            climb = $scope.climbData[i];
                            if (climb.id === id) {
                                break;
                            }
                        }

                        $scope.climbData.splice(i,1);

                        $scope.message = "Climb was deleted";
                        $scope.showMessage = true;
                    } else {
                        $scope.message = "Climb was not deleted - failed";
                        $scope.showMessage = true;
                    }

                });
            $scope.refreshClimbs();
        };
    });

