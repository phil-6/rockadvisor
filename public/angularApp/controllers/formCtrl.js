/**
 * Created by philr on 08/03/2017.
 */

angular.module('formCtrl', [])

    .controller('formController', function ($scope){
        $scope.formData = {};

        $scope.processForm = function(){
            alert('cool-');
        };
    });