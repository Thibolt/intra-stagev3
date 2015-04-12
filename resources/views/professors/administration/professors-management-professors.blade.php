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
                        <li class="active"><a href="{{ url('professors/professors-management') }}"><span class="glyphicon glyphicon-user"></span> Les professeurs</a></li>
                        <li><a href="{{ url('professors/create-professors') }}"><span class="glyphicon glyphicon-plus"></span> Créer un professeur</a></li>
                    </ul>
                </div>
                @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-user"></span> Gestion des professeurs</h1>

                        <div class="panel panel-default">
                            <!-- Default panel contents -->
                            <div class="panel-heading">Liste des professeurs existant</div>

                            <table class="table table-striped">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nom</th>
                                    <th>Prénom</th>
                                    <th>Login</th>
                                    <th>E-mail</th>
                                    <th>Modifier</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>tmp</td>
                                    <td>tmp</td>
                                    <td>tmp</td>
                                    <td>tmp@tmp.fr</td>
                                    <td>
                                        <a href="{{ url('professors/modify-professors-tmp') }}">
                                            <button type="button" class="btn btn-default" aria-label="Left Align">
                                            <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
                                        </button>
                                        </a>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                        </div>

                    </div>
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


