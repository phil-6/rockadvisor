/**
 * Created by philr on 22/02/2017.
 */
angular.module('cragService', [])

    .factory('Crag', function($http) {

        return {
            // get all the crags
            get : function() {
                return $http.get('/api/crags');
            },

            // save a crag (pass in crag data)
            save : function(cragData) {
                return $http({
                    method: 'POST',
                    url: '/api/crags',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(cragData)
                });
            },

            // destroy a crag
            destroy : function(id) {
                return $http.delete('/api/crags/' + id);
            }
        }

    });