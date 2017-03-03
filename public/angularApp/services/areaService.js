/**
 * Created by philr on 22/02/2017.
 */
angular.module('areaService', [])

    .factory('AreaFactory', function($http) {

        return {
            // get all the areas
            get : function() {
                // console.log("service:AreaFactory:get");
                return $http.get('/api/areas');
            },

            //get specific area
            getDetail: function(id){
                // console.log("service:AreaFactory:getDetail(" + id +")");
                return $http.get('/api/areas/' + id );
            },

            // save a area (pass in area data)
            save : function(areaData) {
                // console.log("service:AreaFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/areas',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(areaData)
                });
            },

            // destroy a area
            destroy : function(id) {
                // console.log("service:ClimbFactory:destroy(" + id +")");
                return $http.delete('/api/areas/' + id);
            }
        }

    });