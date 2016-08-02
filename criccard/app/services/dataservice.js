/* 
 * Custom dataservice js file
 */
(function () {
    angular
            .module('CricCard')
            .service('dataservice', dataservice);

    dataservice.$inject = ['$http'];
    function dataservice($http) {
        var services = {
            CreateMatch: CreateMatch,
            CreateBowls: CreateBowls
        }
        return services;
        function CreateMatch(team1,team2,decision1,decision2) {
            return $http.post("http://172.16.0.223/CricCard/api/Matches",
                    {'Team1':team1, 'Team2':team2,"Team1Bowling":decision1,"Team2Bowling":decision2})
                    .success(function (data, status, headers, config) {
                        console.log(data);
                        return data;
                    }).error(function (data, status, headers, config) {
                console.log(data);
                return data;
            });
        }
        
        function CreateBowls(game,over,ball,run,decision) {
            return $http.post("http://172.16.0.223/CricCard/api/Bowls",
                    {'MatchId':game, 'OverNumber':over,"BallNumber":ball,"Run":run,"Wide":false})
                    .success(function (data, status, headers, config) {
                        console.log(data);
                        return data;
                    }).error(function (data, status, headers, config) {
                console.log(data);
                return data;
            });
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