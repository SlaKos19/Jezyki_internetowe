<!DOCTYPE html>
    <html>
        <head>
            <meta http-equiv="content-type" content="text/html" charset="utf-8" />
            <meta name="viewport" content="width=device-width, initial-scale=1.0" />
            <link rel="stylesheet" href="style.css" />
            <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
            <title>Sklep</title>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.12/angular.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.10.0/ui-bootstrap-tpls.min.js"></script>
            <script src="sklep.js"></script>
        </head>

    <body>
        <?php
			include_once("logo.php");
		?>
    	<?php
			include_once("menu.php");
		?>
        <div class="index_tlo">
            <div ng-app="myApp" ng-controller="controller">
                <div class="container">
                    <br/>
                    <h3 align="center">Aktualne rzeczy na naszym portalu</a></h3>
                    <br/>
                    <div class="row">
                        <div class="col-sm-2 pull-left">
                            <label>Numer strony:</label>
                                <select ng-model="data_limit" class="form-control">
                                    <option>10</option>
                                    <option>20</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                        </div>
                        <div class="col-sm-6 pull-right">
                            <label>Szukaj:</label>
                                <input type="text" ng-model="search" ng-change="filter()" placeholder="Szukaj" class="form-control" />
                        </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-md-12" ng-show="filter_data > 0">
                            <table class="table table-striped table-bordered">
                                <thead>
                                    <th>Nazwa&nbsp;<a ng-click="sort_with('nazwa');"><i class="glyphicon glyphicon-sort"></i></a></th>
                                    <th>Symbol&nbsp;<a ng-click="sort_with('symbol');"><i class="glyphicon glyphicon-sort"></i></a></th>
                                    <th>Rodzaj&nbsp;<a ng-click="sort_with('rodzaj');"><i class="glyphicon glyphicon-sort"></i></a></th>
                                    <th>Parametry&nbsp;<a ng-click="sort_with('parametry');"><i class="glyphicon glyphicon-sort"></i></a></th>
                                    <th>Cena&nbsp;<a ng-click="sort_with('cena');"><i class="glyphicon glyphicon-sort"></i></a></th>
                                </thead>

                                <tbody>
                                    <tr ng-repeat="data in searched = (file | filter:search | orderBy : base :reverse) | beginning_data:(current_grid-1)*data_limit | limitTo:data_limit">
                                    <td>{{data.nazwa}}</td>
                                    <td>{{data.symbol}}</td>
                                    <td>{{data.rodzaj}}</td>
                                    <td>{{data.parametry}}</td>
                                    <td>{{data.cena}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="col-md-12" ng-show="filter_data == 0">
                            <div class="col-md-12">
                                <h4>Nie znaleziono elementów...</h4>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="col-md-6 pull-left">
                                <h5>Pokazuje {{ searched.length }} z {{ entire_user}} elementów</h5>
                            </div>
                            <div class="col-md-6" ng-show="filter_data > 0">
                                <div pagination="" page="current_grid" on-select-page="page_position(page)" boundary-links="true" total-items="filter_data" items-per-page="data_limit" class="pagination-small pull-right" previous-text="&laquo;" next-text="&raquo;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
    </div>
    <?php
		include_once("footer.php");
	?>
    </body>
</html>