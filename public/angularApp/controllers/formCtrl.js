/**
 * Created by philr on 08/03/2017.
 */

angular.module('formCtrl', [])

    .controller('formController', function ($scope, $http, CragFactory, $timeout) {
        $scope.formData = {};
        $scope.submitButtonHidden = false;
        $scope.progressMessageShowing = false;
        $scope.resultShowing = false;
        $scope.errorShowing = false;
        $scope.latregex = "^(\+|-)?(?:90(?:(?:\.0{1,6})?)|(?:[0-9]|[1-8][0-9])(?:(?:\.[0-9]{1,6})?))$";
        $scope.lngregex = "^(\+|-)?(?:180(?:(?:\.0{1,6})?)|(?:[0-9]|[1-9][0-9]|1[0-7][0-9])(?:(?:\.[0-9]{1,6})?))$";
        $scope.orintationregex = "N|S|E|W|NE|SE|NW|SW|NNE|ENE|SSE|ESE|NNW|WNW|SSW|WSW";

        $scope.processForm = function () {
            alert('cool-');
        };
    });