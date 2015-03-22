var authApp = angular.module('fex-secret-auth',['ngRoute', 'ngStorage']);

authApp.config(['$routeProvider', function($routeProvider){
		$routeProvider
				.when('/login', {
						templateUrl: 'templates/login-template.html'
				})

				.when('/register', {
						templateUrl: 'templates/signup-template.html'
				})

				.otherwise({
						redirectTo: '/login'
				});
}]);
