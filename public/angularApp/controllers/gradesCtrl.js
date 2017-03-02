/**
 * Created by philr on 26/02/2017.
 */

angular.module('gradesCtrl', [])

// inject the Grade service into our controller
    .controller('gradesController', function ($scope, $http, GradeFactory) {
        // object to hold all the data for the new grade form
        $scope.gradesData = {};
        $scope.showMessage = false;
        $scope.message = "";

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the grades first and bind it to the $scope.grades object
        // use the function we created in our service
        // GET ALL GRADES ==============
        GradeFactory.get()
            .success(function (data) {
                console.log("ctrl");
                $scope.gradesData = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN GRADE ================
        // $scope.submitGrade = function () {
        //     $scope.loading = true;

        //     // save the grade. pass in grade data from the form
        //     // use the function we created in our service
        //     GradeFactory.save($scope.gradeData)
        //         .success(function (data) {

        //             // if successful, we'll need to refresh the grade list
        //             Grade.get()
        //                 .success(function (getData) {
        //                     $scope.grades = getData;
        //                     $scope.loading = false;
        //                 });

        //         })
        //         .error(function (data) {
        //             console.log(data);
        //         });
        // };

        // function to handle deleting a grade
        // DELETE A GRADE ====================================================
        $scope.deleteGrade = function (id) {
            // use the function we created in our service
            GradeFactory.destroy(id)
                .success(function (data) {

                    if (data.success) {

                        var i;
                        for (i = 0; i < $scope.gradesData.length; i++) {
                            grade = $scope.gradesData[i];
                            if (grade.id == id) {
                                break;
                            }
                        }

                        $scope.gradesData.splice(i,1);

                        $scope.message = "Grade was deleted";
                        $scope.showMessage = true;
                    } else {
                        $scope.message = "Grade was not deleted - failed";
                        $scope.showMessage = true;
                    }

                });
        };

        $scope.buildGradeURL = function(id) {
            return "/grades/" + id;
        };

    });

