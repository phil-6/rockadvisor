/**
 * Created by philr on 02/03/2017.
 */
/**
 * Created by philr on 22/02/2017.
 */
angular.module('emailService', [])

    .factory('EmailFactory', function($http) {
        return{
            submit : function(formData){
                console.log("service:EmailFactory:submit");
                return $http({
                    method: 'POST',
                    url: '/api/sendMail',
                    data: $.param(formData),  //param method from jQuery
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}  //set the headers so angular passing info as form data (not request payload)
                });
            }
        }
    });
