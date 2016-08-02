/* dataservice
 * Avengers controller
 */


'use strict';
angular
        .module('CricCard')
        .controller("CreateMatch", CreateMatch)
        .controller("Language", Language);

CreateMatch.$inject = ['$scope', '$http', 'dataservice', '$state'];
Language.$inject = ['$scope', '$http', 'dataservice', '$state', '$stateParams'];

function CreateMatch($scope, $http, dataservice, $state) {
    $scope.PlayNow="Play Now";
//    $scope.Team1 = "Bangladesh";
//    $scope.Team2 = "India";
    $scope.show = 1;
    $scope.firstTeam = true;
    $scope.CreateMatch = Postmatch;
    function Postmatch(path) {
        return dataservice.CreateMatch($scope.Team1, $scope.Team2, $scope.Team_Bowling1, $scope.Team_Bowling2)
                .then(function (data) {
                    $scope.result = data;
                    $scope.Team_Bowling1 = false;
                    $scope.Team_Bowling2 = false;
                    //$state.go("about", {gid: data.data.Id, over: "00", ball: "00"});
                });
    }
}

function Language($scope, $http, dataservice, $state, $stateParams) {
    $scope.Team1 = "Bangladesh";
    $scope.Team2 = "India";
    $scope.show = 1;
    $scope.firstTeam = true;
    $scope.Language = $stateParams.language;
    if($scope.Language=="dn"){
        $scope.PlayNow="Denish Play";
    }
    else{
        $scope.PlayNow="Play Now";
    }
    $scope.CreateMatch = Postmatch;
    function Postmatch(path) {
        //$scope.Team1 = "sdfdfds";
        return dataservice.CreateMatch($scope.Team1, $scope.Team2, $scope.Team_Bowling1, $scope.Team_Bowling2)
                .then(function (data) {
                    $scope.result = data;
                    $scope.Team_Bowling1 = false;
                    $scope.Team_Bowling2 = false;
                    //$state.go("about", {gid: data.data.Id, over: "00", ball: "00"});
                });
    }
}

