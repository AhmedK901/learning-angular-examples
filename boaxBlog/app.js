// url of back-end stuff
var backend_url = 'http://vserver/learning-angular-examples/boaxBlog/back-end/';

// angular app
var app = angular.module('boaxBlog', ['ngSanitize', 'ngRoute']);

/*
		App Route
*/
app.config(['$routeProvider', function($routeProvider) {

		$routeProvider
				
				.when('/', {
						templateUrl: 'articles.html',
						controller: 'content'
				})

				.when('/add', {
						templateUrl: 'add-new-post.html',
						controller: 'AddNewPostController'
				})

				.otherwise({
						redirectTo: '/'
				});

}]);

/*
		Controllers
*/
// blog header controller
app.controller('blogHeader', function($scope, $http) {

	// set blog name variable
	$scope.blog_name = '';

	// get blog name
	$http.get(backend_url+'blog/setting/blog_title').success(function(data){
		$scope.blog_name = data[0].setting_value;
	});


})

// content controller
app.controller('content', function($scope, $http) {
	
	// set last posts object
	$scope.last_posts = [];

	// get last posts object
	$http.get(backend_url+'blog/posts').success(function(data) {
			$scope.last_posts = data;
	});

	
})

// add new post controller
app.controller('AddNewPostController', function($scope, $http,$location) {

		// initial scope attributes
		$scope.isSubmitted = false;
		$scope.post_title;
		$scope.post_name;
		$scope.post_author;
		$scope.post_content;


		// add new post method
		$scope.addNewPost = function() {

			// the form is submitted
			$scope.isSubmitted = true;

			if ($scope.addNewPostForm.$valid) {

					// insert new post
					$http.post(backend_url+'blog/posts/add', {
							post_title: $scope.post_title,
							post_name: $scope.post_name,
							post_author: $scope.post_author,
							post_content: $scope.post_content
					}).
							success(function(data) {
									console.log(data);

									// set form status to default
									$scope.isSubmitted = false;
									$scope.addNewPostForm.$submitted = false;

									// clear all input values
									$scope.post_title = '';
									$scope.post_name = '';
									$scope.post_author = '';
									$scope.post_content = '';

							}).
							error(function(data) {
									console.log(data);
							});

			} else {
					$scope.isSubmitted = false;
					$scope.addNewPostForm.$submitted = false;
			}
				
				

		}

		// cancel adding the post
		$scope.cancelAddPost = function() {
			$location.path('/');
		}

});
