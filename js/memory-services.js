'use strict';

(function () {

    var employees = [],

        findById = function (id) {
            var employee = null,
                l = employees.length,
                i;
            for (i = 0; i < l; i = i + 1) {
                if (employees[i].id === id) {
                    employee = employees[i];
                    break;
                }
            }
            return employee;
        },

        findByManager = function (managerId) {
            var results = employees.filter(function (element) {
                return managerId === element.managerId;
            });
            return results;
        },

		replaceImage = function(url){
		
		    var vurl = url;	 
		    var oImg=new Image;
		  
		    oImg.onload = function(){
				
					vurl = url;
					
					return vurl;
				
			}
		    oImg.onerror= function(){ 
		   
			   vurl =  "pics/no_photo.jpg";
			   
			   return vurl;
		    }
			
			oImg.src = url;
			
			if(oImg.complete){
			
				oImg.onload.call(oImg);
			}
		   
		};
		
    angular.module('myApp.memoryServices', [])
	
		.factory('LDAP', [ '$q','$http', '$angularCacheFactory',
            function ( $q, $http, $angularCacheFactory) {
				
				$angularCacheFactory('dataCache',{
				
					maxAge: 90000, // Items added to this cache expire after 15 minutes.
					cacheFlushInterval: 60000, // This cache will clear itself every hour.
					deleteOnExpire: 'aggressive' // Items will be deleted from this cache right when they expire.
				});
			
                return {
                    query: function (fdata) {
						var deferred = $q.defer();
						var ls = JSON.parse(localStorage.getItem('eData'));
						var loggedIn = localStorage.getItem('loggedIn');						
						if(!loggedIn){
						  $http({
							method:"POST",
							data: fdata,
							cache: $angularCacheFactory.get('dataCache'),
							url:'server/callLDAP.php',
							//url:'http://www.askthecockerel.com.au/intranet/mobile/callLDAP.php',
						  }).success(function(data, status){
							 
								// replace invalid image path	
							
								 for(var i=0; i<data.length; i++){
									data[i].pic = "pics/"+data[i].pic;
								}  
								
								localStorage.setItem('eData', JSON.stringify(data));							 
								localStorage.setItem('loggedIn', 'yes');	
								
								deferred.resolve(data);
						  }).error(function(data){
						  
								alert(data);
						  });
						  
						 }else{
							deffered.resolve(ls);
						 }
						
					return deferred.promise;
						
                    },
                    get: function (employee) {
                        return findById(parseInt(employee.employeeId));
                    },
					setEmployees: function(emp){
						employees = emp;
					}
                }
            }])
		
        .factory('Employee', [
            function () {
                return {
                    query: function () {
					
						employees = JSON.parse(localStorage.getItem('eData'));
						
                        return employees;
                    },
                    get: function (employee) {
                        return findById(parseInt(employee.employeeId));
                    },
					setEmployees: function(emp){
						employees = emp;
						//console.log(employees);
					}
                }

            }])
        .factory('Report', [
            function () {
                return {
                    query: function (employee) {
                        return findByManager(parseInt(employee.employeeId));
                    }
                }

            }]);

}());