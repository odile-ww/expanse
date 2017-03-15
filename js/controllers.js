var appCtrls = angular.module('appCtrls', []);

myApp.controller('MainCtrl', function($scope) {
  
});

myApp.controller('BooksCtrl', function($scope, $http) {
  $http.get('js/books.json').success(function(data){
   $scope.books = data;
 });
});

myApp.controller('QuotesCtrl', function($scope, $http) {
  $http.get('js/quotes.json').success(function(data){
   $scope.quotes = data;
  });
});