var app=angular.module('AppModule',['smart-table','ng','ngAnimate','ngAria','ngMaterial','ngMessages'],
	function($interpolateProvider){
	$interpolateProvider.startSymbol('[[');
	$interpolateProvider.endSymbol(']]');
})
.constant('API_URL','http://localhost:8888/hotel/public/');
console.log(app);

 function post(url,param){
		 var req = {
       method: 'POST',
        url: url,
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        data:param?$.param(param):''
     }
     return req;
	}
