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
                        <li class="active"><a href="{{ url('professors/students-management') }}"><span class="glyphicon glyphicon-user"></span> Les étudiants</a></li>
                        <li><a href="{{ url('professors/modify-students-list') }}"><span class="glyphicon glyphicon-pencil"></span>  Modifier la liste d'étudiants</a></li>
                    </ul>
                </div>
                @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-user"></span> Gestion des étudiants</h1>

                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Liste des étudiants SIO 1</div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Liste des étudiants SIO 2</div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>E-mail</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1,001</td>
                                    <td>Lorem</td>
                                    <td>ipsum</td>
                                    <td>dolor</td>
                                </tr>
                                <tr>
                                    <td>1,002</td>
                                    <td>amet</td>
                                    <td>consectetur</td>
                                    <td>adipiscing</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>Integer</td>
                                    <td>nec</td>
                                    <td>odio</td>
                                </tr>
                                <tr>
                                    <td>1,003</td>
                                    <td>libero</td>
                                    <td>Sed</td>
                                    <td>cursus</td>
                                </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


