
// auth controller
authApp.controller('AuthController', function($scope, $localStorage) {

		//console.log($localStorage.isAuthorized);

		if ($localStorage.isAuthorized == undefined) {
				$scope.isAuthorized = false;
		}

});

// login controller
authApp.controller('LoginController', function($scope, $http, $localStorage, $window) {
		
		var backEndUrl = 'http://vserver/learning-angular-examples/fex-secret/back-end';

		$scope.loginSubmit = function() {
				
				if ($scope.loginForm.$valid) {
						
						$http.post(backEndUrl+'/login',{
								'user_email': $scope.email,
								'user_pass': $scope.password
						}).success(function(data) {

							if (data.isValid) {
									$scope.incorrectData = false;

									// add the token to local storage
									$localStorage.user_token = data.user_token;
									$localStorage.isAuthorized = true;

									if ($localStorage.user_token != undefined && $localStorage.isAuthorized != undefined) {
											// redirect to app (simple dashboard)
											setTimeout(function() {
													$window.location.href = 'index.html';
											}, 300);
											
									}
									

							} else {
									alert('Username or password is incorrect');
									$scope.incorrectData = true;
							}
							//console.log(data);
								
						});
				}
		}
});

// register controller
authApp.controller('RegisterController', function($scope, $http, $localStorage, $window) {
		
		var backEndUrl = 'http://vserver/learning-angular-examples/fex-secret/back-end';

		$scope.registerSubmit = function() {
				
				if ($scope.registerForm.$valid) {


						
						$http.post(backEndUrl+'/register',{
								'user_email': $scope.email,
								'user_pass': $scope.password
						}).success(function(data) {

								//console.log(data);

								if (data.isExist == false) {

									$scope.registed = true;

									// add the token to local storage
									$localStorage.user_token = data.user_token;
									$localStorage.isAuthorized = true;

									if ($localStorage.user_token != undefined && $localStorage.isAuthorized != undefined) {

											// redirect to app (simple dashboard)
											setTimeout(function() {
													$window.location.href = 'index.html';
											}, 300);

									}

								} else {
										alert("Your email is exist already!");
								}

								
						});
				}
		}
});
