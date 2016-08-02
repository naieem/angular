/* 
 * Route js is for assigning route for the application 
 */
(function () {
    'use strict';

    angular
            .module('CricCard')
            .config(configeration);

    function configeration($stateProvider, $urlRouterProvider) {

        $urlRouterProvider.otherwise('/home');

        $stateProvider
                // Home View //
                .state('home', {
                    url: '/home',
                    templateUrl: 'app/views/Home.html',
                    controller: CreateMatch
                })
                .state('language', {
                    url: '/language/:language',
                    templateUrl: 'app/views/Language.html',
                    controller: Language
                });
//                .state('about', {
//                    url: '/:gid/:over/:ball',
//                    templateUrl: 'app/views/PlayBoard.html',
//                    controller: PlayGame
//                });

    }
    ;
})();