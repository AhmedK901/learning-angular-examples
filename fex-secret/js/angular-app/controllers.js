// app controller
app.controller('AppController', function($http, $scope, $localStorage, $window ) {

		var backEndUrl = 'http://vserver/learning-angular-examples/fex-secret/back-end';
		
		if ($localStorage.user_token == undefined && $localStorage.isAuthorized == undefined) {
				$scope.isAuthorized = false;
				$window.location.href = "auth.html";
		} else if ($localStorage.isAuthorized == true && $localStorage.user_token != null) {

			$scope.isAuthorized = true;

			// $http.post(backEndUrl+'/checkForToken', {'user_token': $localStorage.user_token}).success(function(data) {
			// 		if ($localStorage.user_token == data.user_token) {
			// 				$scope.isAuthorized = true;
			// 		} else {
			// 				$scope.isAuthorized = false;
			// 		}
			// });

		}

		$scope.logoutFromApp = function() {
				$localStorage.$reset();

				setTimeout(function() {
						$window.location.href = 'auth.html';
				}, 300);
				
		}

});

// secrets controller
app.controller('SecretsController', function($scope, $http) {

	var backEndUrl = 'http://vserver/learning-angular-examples/fex-secret/back-end';

	if ($scope.isAuthorized == true) {

			$scope.secrets = [];

			$http.post(backEndUrl+'/secrets', {request: 'secrets'}).success(function(data) {
					$scope.secrets = data;
			});

	}

});
