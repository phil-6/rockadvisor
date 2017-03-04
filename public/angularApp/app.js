/**
 * Created by philr on 23/02/2017.
 */
var areaApp = angular.module('areaApp', ['areasCtrl', 'areaService']);
var cragApp = angular.module('cragApp', ['cragsCtrl', 'cragService']);
var cragDetailApp = angular.module('cragDetailApp', ['cragDetailCtrl', 'cragService']);
var gradeApp = angular.module('gradeApp', ['gradesCtrl', 'gradeService']);
var climbApp = angular.module('climbApp', ['climbsCtrl', 'climbService']);
var contributeApp = angular.module('contributeApp', ['emailCtrl', 'emailService']);


var finderApp = angular.module('finderApp', ['cragsCtrl', 'cragService', 'ui.router']);
finderApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/');
    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/',
            templateUrl: '../views/partial-finder.html'
        })
        // nested list with custom controller
        .state('home.crags', {
            url: 'crags',
            templateUrl: '../views/partial-finder-crags.html',
            controller: 'cragsController'
        })
        // nested list with just some random string data
        .state('home.areas', {
            url: 'areas',
            template: 'I could sure use a drink right now.'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('blog', {
            // we'll get to this in a bit
        })

});