/**
 * Created by philr on 01/03/2017.
 */

angular.module('climbService', [])

    .factory('Climb', function($http) {

        return {
            // get all the climbs
            get : function() {
                return $http.get('/api/climbs');
            },

            // save a climb (pass in climb data)
            save : function(climbData) {
                return $http({
                    method: 'POST',
                    url: '/api/climbs',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(climbData)
                });
            },

            // destroy a climb
            destroy : function(id) {
                return $http.delete('/api/climbs/' + id);
            }
        }

    });