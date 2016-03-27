var app = angular.module('inscription',[]);
app.controller('cteIns',function($scope,$http)
{

	$scope.inscription={};
	$scope.users={};

	$scope.save=function(){

	console.log($scope.inscription.name);
	console.log($scope.inscription.lastName);
	
	var url="setOwnerd.php";
		
	$http.post(url,{'name':$scope.inscription.name,'lastName':$scope.inscription.lastName}).success(
	function(data,status,headers,config){
	console.log("we are good!!! <3");
	$scope.inscription={};
	$scope.select();
	});

	}

	$scope.select=function(){
	var url ="select.php";
	$http.get(url).success (function(response){
		$scope.users= response;

		console.log("dont cry!!!! we are successfulllll");

		//$scope.loadData();
	})

	}



})
