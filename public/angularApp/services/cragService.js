/**
 * Created by philr on 22/02/2017.
 */
angular.module('cragService', [])

    .factory('CragFactory', function ($http) {

        return {
            // get all the crags
            get: function () {
                //console.log("service:CragFactory:get");
                return $http.get('/api/crags');
            },

            //get specific crag
            getDetail: function (id) {
                // console.log("service:CragFactory:getDetail(" + id +")");
                return $http.get('/api/crags/' + id);
            },

            getClimbs: function (id) {
                return $http.get('/api/crags/' + id + '/climbs');
            },

            // save a crag (pass in crag data)
            save: function (cragData) {
                //console.log("service:CragFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/crags',
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(cragData)
                });
            },

            //edit a crag
            update: function (cragData, id){
                return $http({
                    method: 'POST',
                    url: ('api/crags/' + id),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                    data: $.param(cragData)
                });
            },

            // destroy a crag
            destroy: function (id) {
                // console.log("service:CragFactory:destroy(" + id +")");
                return $http.delete('/api/crags/' + id);
            }
        }

    });