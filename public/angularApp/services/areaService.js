/**
 * Created by philr on 22/02/2017.
 */
angular.module('areaService', [])

    .factory('Area', function($http) {

        return {
            // get all the areas
            get : function() {
                return $http.get('/api/areas');
            },

            // save a area (pass in area data)
            save : function(areaData) {
                return $http({
                    method: 'POST',
                    url: '/api/areas',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(areaData)
                });
            },

            // destroy a area
            destroy : function(id) {
                return $http.delete('/api/areas/' + id);
            }
        }

    });