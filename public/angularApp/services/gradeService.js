/**
 * Created by philr on 26/02/2017.
 */
angular.module('gradeService', [])

    .factory('Grade', function($http) {

        return {
            // get all the grades
            get : function() {
                return $http.get('/api/grades');
            },

            // save a grade (pass in grade data)
            save : function(gradeData) {
                return $http({
                    method: 'POST',
                    url: '/api/grades',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(gradeData)
                });
            },

            // destroy a grade
            destroy : function(id) {
                return $http.delete('/api/grades/' + id);
            }
        }

    });