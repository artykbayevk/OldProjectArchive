var myApp = angular.module('myApp', ['ui.router']);
  // For Component users, it should look like this:
  myApp.config(function($stateProvider, $urlRouterProvider) {
  //
  // For any unmatched url, redirect to /state1
  $urlRouterProvider.otherwise("get-started");
  //
  // Now set up the states
  $stateProvider
      .state('icons', {
        url: "/tutorial/icons",
        templateUrl: "changable-pages/icons.html"
      })
      .state('get-started', {
        url: "/get-started",
        templateUrl: "changable-pages/get-started.html",
      })
      .state('inputs', {
        url: "/inputs",
        templateUrl: "changable-pages/inputs.html"
      }).state('fonts', {
        url: "/fonts",
        templateUrl: "changable-pages/fonts.html",
      });
});

$(document).ready(function(){
    jQuery(function(){
    $(window).scroll(function(){
      console.log($(window).scrollTop());
      if($(window).scrollTop()>210){
          $('.right-nav').css({'position':'fixed','right':'0','top':'0'});
          $('.navigation').css({'margin-top':'0'});
      }else{
          $('.right-nav').css({'position':'relative'});
          $('.navigation').css({'margin-top':'100px'});
      }
    });
  });
});