/**
 * Created by philr on 22/02/2017.
 */
angular.module('areaService', [])

    .factory('Area', function($http) {

        return {
            // get all the comments
            get : function() {
                return $http.get('/api/areas');
            },

            // save a comment (pass in comment data)
            save : function(areaData) {
                return $http({
                    method: 'POST',
                    url: '/api/areas',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(areaData)
                });
            },

            // destroy a comment
            destroy : function(id) {
                return $http.delete('/api/areas/' + id);
            }
        }

    });