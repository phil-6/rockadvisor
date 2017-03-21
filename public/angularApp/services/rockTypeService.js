/**
 * Created by philr on 20/03/2017.
 */
angular.module('rockTypeService', [])

    .factory('RockTypeFactory', function($http) {

        return {
            // get all the rockTypes
            get : function() {
                // console.log("service:RockTypeFactory:get");
                return $http.get('/api/rockTypes');
            },

            //get specific rockType
            getDetail: function(id){
                // console.log("service:RockTypeFactory:getDetail(" + id +")");
                return $http.get('/api/rockTypes/' + id );
            },

            // save a rockType (pass in rockType data)
            save : function(rockTypeData) {
                // console.log("service:RockTypeFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/rockTypes',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(rockTypeData)
                });
            },

            // destroy a rockType
            destroy : function(id) {
                // console.log("service:RockTypeFactory:destroy(" + id +")");
                return $http.delete('/api/rockTypes/' + id);
            }
        }

    });