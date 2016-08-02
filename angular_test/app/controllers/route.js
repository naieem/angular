/* 
 * Route js is for assigning route for the application 
 */
(function () {
    'use strict';

    angular
            .module('app')
            .config(config);

    function config($routeProvider) {
        $routeProvider
                .when('/', {
                    templateUrl: 'app/views/add_order.html',
                    controller: 'Avengers',
                    controllerAs: 'vm'
                });
    }
})();