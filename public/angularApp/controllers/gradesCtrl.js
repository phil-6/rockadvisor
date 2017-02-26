/**
 * Created by philr on 26/02/2017.
 */

angular.module('gradesCtrl', [])

// inject the Grade service into our controller
    .controller('gradesController', function ($scope, $http, Grade) {
        // object to hold all the data for the new grade form
        $scope.gradeData = {};

        // loading variable to show the spinning loading icon
        $scope.loading = true;

        // get all the grades first and bind it to the $scope.grades object
        // use the function we created in our service
        // GET ALL GRADES ==============
        Grade.get()
            .success(function (data) {
                $scope.grades = data;
                $scope.loading = false;
            });


        // function to handle submitting the form
        // SAVE AN GRADE ================
        $scope.submitGrade = function () {
            $scope.loading = true;

            // save the grade. pass in grade data from the form
            // use the function we created in our service
            Grade.save($scope.gradeData)
                .success(function (data) {

                    // if successful, we'll need to refresh the grade list
                    Grade.get()
                        .success(function (getData) {
                            $scope.grades = getData;
                            $scope.loading = false;
                        });

                })
                .error(function (data) {
                    console.log(data);
                });
        };

        // function to handle deleting a grade
        // DELETE A GRADE ====================================================
        $scope.deleteGrade = function (id) {
            $scope.loading = true;

            // use the function we created in our service
            Grade.destroy(id)
                .success(function (data) {

                    // if successful, we'll need to refresh the grade list
                    Grade.get()
                        .success(function (getData) {
                            $scope.grades = getData;
                            $scope.loading = false;
                        });

                });
        };

    });

