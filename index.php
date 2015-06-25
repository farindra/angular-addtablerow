<?php
/**
 * Created by PhpStorm.
 * User: Valentine
 * Date: 6/24/15
 * Time: 11:41 AM
 */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html ng-app="helloApp">
<head>
    <title>Hello AngularJS - Add Table Row Dynamically</title>
    <link rel="stylesheet"
          href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.17/angular.min.js"></script>
    <script src="assets/js/controllers.js"></script>
</head>
<!-- Controller name goes here -->
<body class="container" ng-controller="CompanyCtrl">

<form class="form-vertical" role="form" ng-submit="addRow()">
    <div class="form-group">
        <label class="col-md-1 control-label">Name</label>
            <div class="col-md-3">
                <select class="form-control" name="name"  ng-model="name">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="mercedes">Mercedes</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
           <!-- <select type="text" class="form-control" name="name"  ng-model="name" />-->

    </div>
    <div class="form-group">
        <label class="col-md-1 control-label">Employees</label>
        <div class="col-md-2">
            <input type="text" class="form-control" name="employees" ng-model="employees" />
        </div>
    </div>
    <div class="form-group">
        <label class="col-md-1 control-label">Headoffice</label>
        <div class="col-md-2">
            <input type="text" class="form-control" name="headoffice" ng-model="headoffice" />
        </div>
    </div>
    <div class="form-group">
        <div style="padding-left:110px">
            <input type="submit" value="Add +" class="btn btn-success"/>
        </div>
    </div>
</form>



<table id="listbarang" class="table">
        <tr>
            <th>Name</th>
            <th>Employees</th>
            <th>Head Office</th>
        </tr>
        <tr ng-repeat="company in companies">
            <td>{{company.name}}</td>
            <td>{{company.employees}}</td>
            <td>{{company.headoffice}}</td>
        </tr>
</table>

<label id="valnya"></label><br/>
<button id="ee" type="button" onclick="eedijalan()">Click Me!</button>

<script>
    function eedijalan(){
    var myTableArray = [];

    $('table#listbarang tr').each(function() {
        var arrayOfThisRow = [];
        var tableData = $(this).find('td');
        if (tableData.length > 0) {
            tableData.each(function() { arrayOfThisRow.push($(this).text()); });
            myTableArray.push(arrayOfThisRow);
        }
    });

    alert(JSON.stringify(myTableArray));
    }
</script>

</body>
</html>