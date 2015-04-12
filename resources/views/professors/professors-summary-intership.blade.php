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
                        <li ><a href="{{ url('professors/dashboard') }}"><span class="glyphicon glyphicon-tasks"></span>  Panel</a></li>
                        <li><a href="{{ url('professors/edit-covenant-intership') }}"><span class="glyphicon glyphicon-folder-open"></span>  Editer les conventions de stage <span class="badge">42</span></a></li>
                        <li class="active"><a href="{{ url('professors/summary-intership') }}"><span class="glyphicon glyphicon-list-alt"></span>  Récapitulatif des stages</a></li>
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
                        <div class="alert alert-info">
                            <span class="glyphicon glyphicon-info-sign"></span>
                            Le fichier récapitulatif des stages est un fichier CSV directement extrait de la base de données.
                        </div>

                        <form name="" method="" action="">
                            <input type="hidden" value=""><!--datetime local-->
                            <input type="hidden" value=""><!--user-->

                            <p class="center"><button class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-download-alt"></span>Télécharger un récapitulatif</button></p>
                        </form>
                    </div><!--no delete-->
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


