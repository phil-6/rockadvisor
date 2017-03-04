/**
 * Created by philr on 23/02/2017.
 */
var areaApp = angular.module('areaApp', ['areasCtrl', 'areaService']);
var cragApp = angular.module('cragApp', ['cragsCtrl', 'cragService']);
var cragDetailApp = angular.module('cragDetailApp', ['cragDetailCtrl', 'cragService']);
var gradeApp = angular.module('gradeApp', ['gradesCtrl', 'gradeService']);
var climbApp = angular.module('climbApp', ['climbsCtrl', 'climbService']);
var contributeApp = angular.module('contributeApp', ['emailCtrl', 'emailService']);


var finderApp = angular.module('finderApp', ['ui.router']);
finderApp.config(function($stateProvider, $urlRouterProvider){
    $urlRouterProvider.otherwise('/finder');
    $stateProvider

    // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/finder',
            templateUrl: '../views/partial-finder.html'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('blog', {
            // we'll get to this in a bit
        });
});