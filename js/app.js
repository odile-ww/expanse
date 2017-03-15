var myApp = angular.module('myApp', ['ngRoute', 'appCtrls']);

myApp.config(['$routeProvider', function($routeProvider) {
  $routeProvider.when('/main',
  {
    templateUrl: 'partials/main.html',
    controller: 'MainCtrl'
  }).when('/books',
  {
    templateUrl: 'partials/books.html',
    controller: 'BooksCtrl'
  }).when('/quotes',
  {
    templateUrl: 'partials/quotes.html',
    controller: 'QuotesCtrl'
  }).when('/poll',
  {
    templateUrl: 'partials/poll.html',
    controller: 'MainCtrl'
  }).
  otherwise({
    redirectTo: '/main'
  });

}]);




