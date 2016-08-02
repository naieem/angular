/* 
 * Custom dataservice js file
 */
(function () {
    angular
            .module('app')
            .service('dataservice', dataservice);

    dataservice.$inject = ['$http'];
    function dataservice($http) {
        var vm = this;
        /*vm.naieem = "sfd";
         vm.hi = hello;
         function hello() {
         return vm.naieem;
         }*/
        var services = {
            getValue: getvalue
        }
        return services;
        //vm.getValue = getValue;
        function getvalue() {
            return $http.get('app/php/get.php')
                    .then(getAvengersComplete)
                    .catch(getAvengersFailed);

            function getAvengersComplete(response) {
                console.log(response.data);
                return response.data;
            }

            function getAvengersFailed(error) {
                console.log('XHR Failed for getAvengers.' + error.data);
            }
        }
        //return "kghgj";
//        function getAvengers() {
//            return 'kjkjk';
////            return $http.get('app/php/get.php')
////                    .then(getAvengersComplete)
////                    .catch(getAvengersFailed);
////
////            function getAvengersComplete(response) {
////                return response.data.results;
////            }
////
////            function getAvengersFailed(error) {
////                console.log('XHR Failed for getAvengers.' + error.data);
////            }
//        }

    }
})();