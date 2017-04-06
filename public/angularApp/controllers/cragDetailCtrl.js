/**
 * Created by philr on 24/02/2017.
 */

angular.module('cragDetailCtrl', [])

// inject the Crag service into our controller
    .controller('cragDetailController', function (
        $scope,
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

        /**
         * EDIT Climb
         */


        $scope.climbFormData = {};
        $scope.fillClimbForm = function($climb) {
            console.log("Here");
            console.log($climb);
            $scope.thisClimb = $climb;
            $scope.climbFormData.grade = $climb.grade_id;
            $scope.climbFormData.crag = $climb.crag_id;
            $scope.climbFormData.climbName = $climb.name;
            $scope.climbFormData.climbDescription = $climb.description;
            $scope.climbFormData.length = $climb.length;
            $scope.climbFormData.pitches= $climb.pitches;
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
            .success(function (data8) {
                $scope.cragsData = data8;
            });

        $scope.gradesData = {};
        GradeFactory.get()
            .success(function (data9) {
                $scope.gradesData = data9;
            });


        $scope.processClimbForm = function (isValid) {
            $scope.submitted = true;
            $scope.submitButtonHidden = true;
            $scope.progressMessageShowing = true;
            console.log("nowhere");
            //$scope.errorShowing = false;

            if (isValid) {
                //$scope.submitted = true;
                //$scope.submitButtonHidden = true;
                //$scope.progressMessageShowing = true;
                $scope.errorShowing = false;
                console.log($scope.thisClimb);
                console.log($scope.climbFormData);
                //console.log($scope.thisClimb.id);

                ClimbFactory.update($scope.climbFormData, $scope.thisClimb.id)
                    .success(function (data10) {
                        console.log(data10); //debugging
                        if (data10.success) { //success comes from the return json object
                            //$scope.submitButtonHidden = true;
                            $scope.progressMessageShowing = false;
                            $scope.resultShowing = true;

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
    });

