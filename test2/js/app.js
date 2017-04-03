// $(document).ready(function() {
//     $('#country').keyup(function() {
//         var query = $(this).val();
//         if (query != ''){
//             $.ajax({
//                 url: "search.php",
//                 method:"POST",
//                 data:{query:query},
//                 success:function(data){
//                     $('#countryList').fadeIn();
//                     $('#countryList').html(data);
//                 }
//             })
//         }
//     });

//     $(document).on('click', 'li', function(){
//         console.log('salut');
//         $("#country").val($(this).text());
//         $('#countryList').fadeOut();
//     });
// });

var myApp = angular.module('myApp',[]);

myApp.controller('gridCtrl', ['$scope', '$http', function($scope,$http) {
   $http.get('getCours.php').success(function(data) {
        $scope.cours = data;
        console.log($scope.cours);
    });
}]);

myApp.controller('coursCtrl', ['$scope', '$http', function($scope,$http) {
    $scope.init = function(name){
        $http.get('getArticle.php?cours=' + name).success(function(data) {
            $scope.articleList = data;
            console.log('I call : getArticle.php?cours=' + name);
            console.log($scope.articleList);
        });
    };
}]);