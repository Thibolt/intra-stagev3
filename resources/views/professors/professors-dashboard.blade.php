@extends('default-professors')

@section('nav-bar')
    <body>
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <span class="navbar-brand" style="color: #777777;">Intra-Stage | Professeurs</span>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <span class="navbar-brand" style="color: #777777;">USER</span>
                    <li class="active"><a href="{{ url('professors/dashboard') }}"><span class="glyphicon glyphicon-tasks"></span> Panel</a></li>
                    <li><a href="{{ url('professors/profile') }}"><span class="glyphicon glyphicon-wrench"></span> Compte</a></li>
                    <li><a href="{{ url('#') }}"><span class="glyphicon glyphicon-log-out"></span> Déconnexion</a></li>
                </ul>
            </div>
        </div>
    </div>
    @endsection

    @section('nav-sidebar')
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                    <ul class="nav nav-sidebar">
                        <li class="active"><a href="{{ url('professors/dashboard') }}"><span class="glyphicon glyphicon-tasks"></span>  Panel</a></li>
                        <li><a href="{{ url('professors/edit-covenant-intership') }}"><span class="glyphicon glyphicon-folder-open"></span>  Editer les conventions de stage <span class="badge">42</span></a></li>
                        <li><a href="{{ url('professors/summary-intership') }}"><span class="glyphicon glyphicon-list-alt"></span>  Récapitulatif des stages</a></li>
                        <li><a href="{{ url('professors/management-database') }}"><i class="fa fa-database"></i>  Gestion de la Bases de données</a></li>
                    </ul>
                @endsection

                @section('nav-sidebar-admin')
                    <ul class="nav nav-sidebar">
                        <li><a href="{{ url('professors/professors-management') }}"><span class="glyphicon glyphicon-user"></span>  Gestion des professeurs</a></li>
                        <li><a href="{{ url('professors/students-management') }}"><span class="glyphicon glyphicon-user"></span>  Gestion des étudiants</a></li>
                        <li><a href="{{ url('professors/edit-template-convenant') }}"><span class="glyphicon glyphicon-pencil"></span>  Modifier la convetion de stage</a></li>
                    </ul>
            </div>
            @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-tasks"></span> Panel</h1>

                        <div class="row panel panel-default">
                            <div class="panel-heading">
                                <i class="fa fa-pie-chart"></i>
                                Nombre d'élèves avec un stage
                            </div>
                            <br/>
                            <div class="placeholders">
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <canvas id="myChartSIO1SISR" width="200" height="200"></canvas>
                                    <h4>SIO 1 SISR</h4>

                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <canvas id="myChartSIO2SISR" width="200" height="200"></canvas>
                                    <h4>SIO 2 SISR</h4>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <canvas id="myChartSIO1SLAM" width="200" height="200"></canvas>
                                    <h4>SIO 1 SLAM</h4>
                                </div>
                                <div class="col-xs-6 col-sm-3 placeholder">
                                    <canvas id="myChartSIO2SLAM" width="200" height="200"></canvas>
                                    <h4>SIO 2 SLAM</h4>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">SIO 1</div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                    <td>elit</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                    <td>Praesent</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                    <td>ante</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>dapibus</td>
                                    <td>diam</td>
                                    <td>Sed</td>
                                    <td>nisi</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>Nulla</td>
                                    <td>quis</td>
                                    <td>sem</td>
                                    <td>at</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">SIO 2</div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                    <th>Header</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                    <td>sit</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                    <td>elit</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                    <td>Praesent</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                    <td>ante</td>
                                </tr>
                                <tr>
                                    <td>1,004</td>
                                    <td>dapibus</td>
                                    <td>diam</td>
                                    <td>Sed</td>
                                    <td>nisi</td>
                                </tr>
                                <tr>
                                    <td>1,005</td>
                                    <td>Nulla</td>
                                    <td>quis</td>
                                    <td>sem</td>
                                    <td>at</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
            </div>
        </div>


        <script>
            document.addEventListener("DOMContentLoaded", function(event) {


                var pieDataSISR1 = [{
                    value: 8,
                    color: '#5CB85C',
                    label: 'Stage trouvés'
                },
                    {
                        value: 8,
                        color: '#D9534F',
                        label: 'Stage non trouvés'
                    }];
                var pieDataSISR2 = [{
                    value: 5,
                    color: '#5CB85C',
                    label: 'Stage trouvés'
                },
                    {
                        value: 11,
                        color: '#D9534F',
                        label: 'Stage non trouvés'
                    }];
                var pieDataSLAM1 = [{
                    value: 2,
                    color: '#5CB85C',
                    label: 'Stage trouvés'
                },
                    {
                        value: 14,
                        color: '#D9534F',
                        label: 'Stage non trouvés'
                    }];
                var pieDataSLAM2 = [{
                    value: 12,
                    color: '#5CB85C',
                    label: 'Stage trouvés'
                },
                    {
                        value: 4,
                        color: '#D9534F',
                        label: 'Stage non trouvés'
                    }];

                var SIO1SISR = new Chart($('#myChartSIO1SISR')[0].getContext("2d")).Pie(pieDataSISR1, Chart.defaults.global);
                var SIO2SISR = new Chart($('#myChartSIO2SISR')[0].getContext("2d")).Pie(pieDataSISR2, Chart.defaults.global);
                var SIO1SLAM = new Chart($('#myChartSIO1SLAM')[0].getContext("2d")).Pie(pieDataSLAM1, Chart.defaults.global);
                var SIO2SLAM = new Chart($('#myChartSIO2SLAM')[0].getContext("2d")).Pie(pieDataSLAM2, Chart.defaults.global);
            });


        </script>
@endsection


