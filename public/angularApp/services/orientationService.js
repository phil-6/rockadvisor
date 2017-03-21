/**
 * Created by philr on 20/03/2017.
 */
angular.module('orientationService', [])

    .factory('OrientationFactory', function($http) {

        return {
            // get all the orientations
            get : function() {
                // console.log("service:OrientationFactory:get");
                return $http.get('/api/orientations');
            },

            //get specific orientation
            getDetail: function(id){
                // console.log("service:OrientationFactory:getDetail(" + id +")");
                return $http.get('/api/orientations/' + id );
            },

            // save a orientation (pass in orientation data)
            save : function(orientationData) {
                // console.log("service:OrientationFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/orientations',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(orientationData)
                });
            },

            // destroy a orientation
            destroy : function(id) {
                // console.log("service:OrientationFactory:destroy(" + id +")");
                return $http.delete('/api/orientations/' + id);
            }
        }

    });