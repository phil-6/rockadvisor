/**
 * Created by philr on 26/02/2017.
 */
angular.module('gradeService', [])

    .factory('GradeFactory', function($http) {

        return {
            // get all the grades
            get : function() {
                // console.log("service:GradeFactory:get");
                return $http.get('/api/grades');
            },

            //get specific grade
            getDetail: function(id){
                // console.log("service:GradeFactory:getDetail(" + id +")");
                return $http.get('/api/grades/' + id );
            },

            // save a grade (pass in grade data)
            save : function(gradeData) {
                // console.log("service:GradeFactory:save");
                return $http({
                    method: 'POST',
                    url: '/api/grades',
                    headers: { 'Content-Type' : 'application/x-www-form-urlencoded' },
                    data: $.param(gradeData)
                });
            },

            // destroy a grade
            destroy : function(id) {
                // console.log("service:GradeFactory:destroy(" + id +")");
                return $http.delete('/api/grades/' + id);
            }
        }

    });