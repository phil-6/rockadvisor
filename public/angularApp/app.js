/**
 * Created by philr
 * on 23/02/2017.
 * Edited last by philr
 * on 05/03/17
 */
var areaApp = angular.module('areaApp', ['areasCtrl', 'areaService']);
var areaDetailApp = angular.module('areaDetailApp', ['areaDetailCtrl', 'areaService']);
var cragApp = angular.module('cragApp', ['cragsCtrl', 'cragService']);
var cragDetailApp = angular.module('cragDetailApp', ['cragDetailCtrl', 'cragService']);
var gradeApp = angular.module('gradeApp', ['gradesCtrl', 'gradeService']);
var climbApp = angular.module('climbApp', ['climbsCtrl', 'climbService']);
var contributeApp = angular.module('contributeApp', ['emailCtrl', 'emailService']);


var finderApp = angular.module('finderApp', [
    'cragsCtrl', 'cragService',
    'cragDetailCtrl',
    'areasCtrl', 'areaService',
    'areaDetailCtrl',
    'ui.router'
]);
finderApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('finder', {
            url: '/',
            templateUrl: '../views/finder-header-partial.html'
        })
        // nested crags index
        .state('finder.crags', {
            url: 'crags',
            templateUrl: '../views/crags-finder-partial.html',
            controller: 'cragsController'
        })
        // nested areas index
        .state('finder.areas', {
            url: 'areas',
            templateUrl: '../views/areas-finder-partial.html',
            controller: 'areasController'
        })
        .state('finder.areas.detail',{

            params: { areaID: {} },
            templateUrl: '../views/areas-finder-partial.html',
            controller: 'areaDetailController'
        })


        // crag detail
        .state('cragDetail', {
            url: '/crag/:cragID',
            templateUrl: '../views/crag-detail-partial.html',
            controller: 'cragDetailController'
        })

        // area detail
        .state('areaDetail', {
            url: '/area/:areaID',
            templateUrl: '../views/area-detail-partial.html',
            controller: 'areaDetailController'
        });


        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        //.state('blog', {
            // we'll get to this in a bit
            //https://scotch.io/tutorials/angular-routing-using-ui-router#multiple-views-about-page
        //})

});