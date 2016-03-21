'use strict';

var App = angular.module('myApp',['ngRoute']);

App.config(['$routeProvider', function($routeProvider) {
	$routeProvider
        .when('/home', {
            templateUrl: 'views/main.html'
        })
        .when('/about', {
            templateUrl: 'views/about.html'
        })
        .when('/events', {
            templateUrl: 'views/events.html'
        })
        .when('/donate', {
            templateUrl: 'views/donate.html'
        })
        .when('/services', {
            templateUrl: 'views/services.html'
        })
        .when('/school', {
            templateUrl: 'views/school.html'
        })
        .when('/contactUs', {
            templateUrl: 'views/contactUs.html'
        })
        .when('/register', {
            templateUrl: 'views/register.html'
        })
        .when('/login', {
            templateUrl: 'views/login.html'
        })
        .when('/faq', {
            templateUrl: 'views/faq.html'
        })
        .when('/albums', {
            templateUrl: 'views/albums.html'
        })
		.otherwise({redirectTo:'/home'});
}]);