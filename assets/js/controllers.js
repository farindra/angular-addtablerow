
var helloApp = angular.module("helloApp", []);
helloApp.controller("CompanyCtrl", function($scope) {
    $scope.companies = [
        {   'name':'Infosys Technologies',
            'employees': 125000,
            'headoffice': 'Bangalore'},
        {   'name':'Cognizant Technologies',
            'employees': 100000,
            'headoffice': 'Bangalore'},
        {   'name':'Wipro',
            'employees': 115000,
            'headoffice': 'Bangalore'},
        {   'name':'Tata Consultancy Services (TCS)',
            'employees': 150000,
            'headoffice': 'Bangalore'},
        {   'name':'HCL Technologies',
            'employees': 90000,
            'headoffice': 'Noida'}

    ];

    $scope.employees='dummy';
    $scope.headoffice='dummy';


    $scope.addRow = function(){
        if(!$scope.name){
            alert('Nama Tidak Boleh Kosong')  ;return;
        }else{
            var nourut=0;
            var duplikat=false;
            $scope.companies.forEach(function(companies) {
               var defdata= JSON.stringify($scope.companies[nourut].name).replace('"', '');
                 defdata= defdata.replace('"', '');
               //alert( $scope.name+ '/ ' + defdata);
               if($scope.name==defdata){
                    alert( $scope.name+ ' Sudah Ada Pada List ');duplikat=true;return;
               }
                nourut=nourut+1;
            });

            if(duplikat==false){
                $scope.companies.push({ 'name':$scope.name, 'employees': $scope.employees, 'headoffice':$scope.headoffice });
                $scope.name='';
                $scope.employees='dummy';
                $scope.headoffice='dummy';
            }
        }
    }
});


