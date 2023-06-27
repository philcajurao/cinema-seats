myBotApp = angular.module("myBotApp", []);

myBotApp.controller('BotController', ['$scope', function($scope){

    $scope.removeBot = function(bot){
        var removeBot = $scope.bots.indexOf(bot);
        $scope.bots.splice(removeBot, 1)
    }

    $scope.addBot = function(){
        $scope.bots.push({
            name: $scope.newBot.name,
            level: $scope.newBot.level,
            rate: parseInt($scope.newBot.rate),
            available: true
        });

        $scope.newBot.name = "";
        $scope.newBot.level = "";
        $scope.newBot.rate = "";
    };
    
    $scope.bots = [
        {
            name: "Jarvis",
            level: "Master AI",
            rate: 10,
            available: true
        },
        {
            name: "Friday",
            level: "Second AI",
            rate: 9,
            available: true
        },
        {
            name: "Siri",
            level: "Third AI",
            rate: 5,
            available: 
            false
        },
        {
            name: "Alexa",
            level: "Last AI",
            rate: 7,
            available: true
        }
    ];

}]);

