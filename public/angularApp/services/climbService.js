/**
 * Created by philr on 01/03/2017.
 */

angular.module('climbService', [])

    .factory('ClimbFactory', function($http) {

        return {
            // get all the climbs
            get : function() {
                console.log("service:ClimbFactory:get");
                return $http.get('/api/climbs');
            },

            //get specific climb
            getDetail: function(id){
                console.log("service:ClimbFactory:getDetail(" + id +")");
                return $http.get('/api/climbs/' + id );
            },

            // save a climb (pass in climb data)
            save : function(climbData) {
                console.log("service:ClimbFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/climbs',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(climbData)
                });
            },

            // destroy a climb
            destroy : function(id) {
                console.log("service:ClimbFactory:destroy(" + id +")");
                return $http.delete('/api/climbs/' + id);
            }
        }

    });