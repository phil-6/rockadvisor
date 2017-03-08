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
    'ui.router', 'ngAnimate'
]);
finderApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('finder', {
            url: '/',
            templateUrl: '../views/_finder-header.html'
        })
        // nested crags index
        .state('finder.crags', {
            url: 'crags',
            templateUrl: '../views/_crags-index.html',
            controller: 'cragsController'
        })
        // nested areas index
        .state('finder.areas', {
            url: 'areas',
            templateUrl: '../views/_areas-index.html',
            controller: 'areasController'
        })
        .state('finder.areas.detail',{

            params: { areaID: {} },
            templateUrl: '../views/_areas-index.html',
            controller: 'areaDetailController'
        })


        // crag detail
        .state('cragDetail', {
            url: '/crag/:cragID',
            templateUrl: '../views/_crag-detail.html',
            controller: 'cragDetailController'
        })

        // area detail
        .state('areaDetail', {
            url: '/area/:areaID',
            templateUrl: '../views/_area-detail.html',
            controller: 'areaDetailController'
        })

        // contribute
        .state('contribute',{
            url: '/contribute/',
            templateUrl: '../views/_contribute-header.html'
        })
        .state('contribute.addArea',{
            url: 'addArea',
            templateUrl: '../views/_contribute-addArea.html'
        })
        .state('contribute.addCrag',{
            url: 'addCrag',
            templateUrl: '../views/_contribute-addCrag.html'
        })
        .state('contribute.addClimb',{
            url: 'addClimb',
            templateUrl: '../views/_contribute-addClimb.html'
        });



});