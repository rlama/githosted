'use strict';

angular.module('myApp', [
    'ngTouch',
    'ngRoute',
    'ngAnimate',
    'myApp.controllers',
    'myApp.memoryServices',
	'pasvaz.bindonce',
	'infinite-scroll',
	'jmdobry.angular-cache'
]).
config(['$routeProvider', '$locationProvider', function ($routeProvider, $locationProvider) {
    $locationProvider.html5Mode(false).hashPrefix("");
	$routeProvider.when('/preloader', {templateUrl: 'partials/preloader.html'});
    $routeProvider.when('/login', {templateUrl: 'partials/login.html', controller: 'LoginCtrl'});
    $routeProvider.when('/employees', {templateUrl: 'partials/employee-list.html', controller: 'EmployeeListCtrl'});
    $routeProvider.when('/employees/:employeeId', {templateUrl: 'partials/employee-detail.html', controller: 'EmployeeDetailCtrl'});
    $routeProvider.when('/employees/:employeeId/reports', {templateUrl: 'partials/report-list.html', controller: 'ReportListCtrl'});
    $routeProvider.otherwise({redirectTo: '/login'});
}])


.filter( 'FileImageReplacement', [ function(){
		
	return function(input){
		var image = new Image();
		
		var url = "pics/"+input;
		
		image.src = url;
		var imageValid = url != "" && image.complete ? true : false;
		if(imageValid){
		
			return url;
			
		}else{
		
			return "pics/no_photo.jpg";
		}
	};
		
}])

.filter('lazyLoad', function($rootScope) {
		return function(items) {
		  // set step to 2 to illustrate the scroll event problem
		  return items.slice(0, 10 * $rootScope.counter);
		};
		
})
.run(function() {
	FastClick.attach(document.body);
})

.directive('whenScrolled',function(){

	return {
	
		link: function(scope, elm, attr){
		
			var raw = elm[0];
			elm.bind('scroll', function() {
                if (raw.scrollTop + raw.offsetHeight >= raw.scrollHeight) {
                    scope.$apply(attr.whenScrolled);
					
					console.log("height reached .....");
                 }
            });
		}	
	}
})

.directive('errSrc', function(){

	return {
	
		link: function(scope,ele,attr){
			
			ele.bind('error', function(){
			
				ele.attr('src', attr.errSrc)
			});
		}
	}

});

/* 
.run(['$http', '$angularCacheFactory', function ($http, $angularCacheFactory) {

    $angularCacheFactory('defaultCache', {
        maxAge: 900000, // Items added to this cache expire after 15 minutes.
        cacheFlushInterval: 6000000, // This cache will clear itself every hour.
        deleteOnExpire: 'aggressive' // Items will be deleted from this cache right when they expire.
    });

    $http.defaults.cache = $angularCacheFactory.get('defaultCache');
}]);
		  */
