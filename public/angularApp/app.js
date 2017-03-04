/**
 * Created by philr on 23/02/2017.
 */
var areaApp = angular.module('areaApp', ['areasCtrl', 'areaService']);
var cragApp = angular.module('cragApp', ['cragsCtrl', 'cragService']);
var cragDetailApp = angular.module('cragDetailApp', ['cragDetailCtrl', 'cragService']);
var gradeApp = angular.module('gradeApp', ['gradesCtrl', 'gradeService']);
var climbApp = angular.module('climbApp', ['climbsCtrl', 'climbService']);
var contributeApp = angular.module('contributeApp', ['emailCtrl', 'emailService']);


var finderApp = angular.module('finderApp', [
    'cragsCtrl', 'cragService',
    'areasCtrl', 'areaService',
    'cragDetailCtrl',
    'ui.router'
]);
finderApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('finder', {
            url: '/',
            templateUrl: '../views/partial-finder.html'
        })
        // nested crags index
        .state('finder.crags', {
            url: 'crags',
            templateUrl: '../views/partial-finder-crags.html',
            controller: 'cragsController'
        })
        // nested areas index
        .state('finder.areas', {
            url: 'areas',
            templateUrl: '../views/partial-finder-areas.html',
            controller: 'areasController'
        })
        // nested crag detail
        .state('finder.cragDetail', {
            url: 'crag/:cragID',
            templateUrl: '../views/partial-detail-crag.html',
            controller: 'cragDetailController'
        })


        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('blog', {
            // we'll get to this in a bit
            //https://scotch.io/tutorials/angular-routing-using-ui-router#multiple-views-about-page
        })

});