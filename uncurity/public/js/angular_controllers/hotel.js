//alert("LO QUE SEA LOK");

app.controller('JSHotelController',
function($scope,$http,$mdDialog,$rootScope,API_URL){
	//console.log("MUERANSE");

	
$scope.list=function(){
	$http(post('listALL')).then(
	function(response)
	{
       $scope.rowCollection=response.data;
       		console.log($scope.rowCollection);
	}
	);
 }


 $scope.delete=function(item){
 	console.log(item);
	$http(post('delete',item)).then(
	function(response)
	{
       $scope.rowCollection=response.data;
       		console.log($scope.rowCollection);
	}
	);
 }

 $scope.new=function(){
 	$('#detail').modal('show');
 	$scope.item={};
 }

 $scope.save=function(close){
  $http(post('save',$scope.item)).then(
	function(response)
	{
	   $scope.msg=response.data;
	   if(typeof $scope.msg=='string'){
	   	$scope.msg_type="success";
	   	$scope_title="Success";
	   }
	   else{
	   	$scope.msg_type="danger";
	   	$scope_title="Error";
	   }

       $scope.list();
	}
	);
  if (close) {
  	$('#detail').modal('hide');
  }
 }

 $scope.update=function(item){
 	$('#detail').modal('show');
 	$scope.item=item;
 }


  $scope.list();

}
);