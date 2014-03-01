'use strict';

angular.module('myApp.controllers', [])
    .controller('MainCtrl', ['$scope', '$rootScope', '$window', '$location', '$timeout', function ($scope, $rootScope, $window, $location , $timeout) {
        
		var ls = localStorage.getItem('loggedIn');
			if(!ls){
				$location.url('/login');
			}
		$scope.slide = '';

        $rootScope.back = function() {
          $scope.slide = 'slide-right';
          $window.history.back();
        }
        $rootScope.go = function(path){
          $scope.slide = 'slide-left';
          $location.url(path);
        }
    }])

	. controller('LoginCtrl', ['$scope', '$timeout', 'LDAP', '$location',  function ($scope,  $timeout , LDAP, $location) {
			
			$scope.formData = {
				username: "username",
				password: "password"
			};
			
			$scope.submitForm = function(){
				
				var fData = JSON.stringify( $scope.formData);
				
				LDAP.query(fData).then(function(data) {
				
				//console.log("XXXXXXXXXX  "+ data);
				//localStorage.setItem('employeeData', JSON.stringify(data));		
				//localStorage.setItem('IsLoggedIn', 'yes'); //http://gregpike.net/demos/angular-local-storage/demo/demo.html
				//$timeout(function(){$window.location.reload()}, 3000);
				LDAP.setEmployees(data);
				
						$timeout($location.url('/employees'), 1000);
				});
			};
	}])
	
    .controller('EmployeeListCtrl', ['$timeout', '$rootScope','$scope', 'Employee', '$document' , '$location', function ($timeout,$rootScope, $scope, Employee, $document, $location) {

		//http://plnkr.co/edit/O5w0Fp?p=preview
		
		/* var ls = localStorage.getItem('loggedIn');
		if(!ls){
			$location.url('/login');
		} */
			

		$scope.employees = Employee.query();
		
		$rootScope.counter = 1;
		
		$scope.$watch('predicate', function() {
		  $rootScope.resetCounter();
		});
		
		$scope.$watch('reverse', function() {
		  $rootScope.resetCounter();
		});
		
		/* 
		  $scope.idOver10k = function(item) {
		  if (item.id > 10) return item;
		}   */
		
		$scope.loadMore = function() {
		  $rootScope.counter += 1;
		  
		};
		 
		$rootScope.resetCounter = function() { // Fix 'scroll' event not trigger issue
		  $rootScope.counter = 1;
		  //adjustCounter();
		};
	
		function adjustCounter() {
		  $timeout(function() {
			if ($window.innerHeight > $document.find('body').outerHeight()) {
			  $rootScope.counter++;
			  adjustCounter();
			}
		  }, 200);
		};
		
    }])
    .controller('EmployeeDetailCtrl', ['$scope', '$routeParams', 'Employee', function ($scope, $routeParams, Employee) {
        $scope.employee = Employee.get({employeeId: $routeParams.employeeId});
    }])
    .controller('ReportListCtrl', ['$scope', '$routeParams', 'Report', function ($scope, $routeParams, Report) {
        $scope.employees = Report.query({employeeId: $routeParams.employeeId});
    }]);
