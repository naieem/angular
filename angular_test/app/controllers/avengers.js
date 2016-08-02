/* 
 * Avengers controller
 */


'use strict';
angular
        .module('app')
        .controller("Avengers", Avengers);
Avengers.$inject = ['dataservice'];
function Avengers(dataservice) {
	debugger;
    var t = this;
    t.naieem = "sfd";
    t.supto =[];
    t.getservice = service;
    function service() {
        //t.supto = dataservice.getValue();
        return dataservice.getValue()
                .then(function (data) {
                    t.supto= data;
                    //return t.supto;
                });
        //console.log(t.supto);
    }
}

