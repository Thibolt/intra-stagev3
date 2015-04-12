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
                        <h1 class="page-header"><span class="glyphicon glyphicon-edit"></span> Modifier un professeur</h1>
                        <form name="" action="">
                            <label for="modify-professorName">Nom :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control force-capital" type="text" id="modify-professorName" name="modify_professorName" placeholder="" value="#" required="">
                            </div>

                            <br/>

                            <label for="modify-professorFirstName">Prénom :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control" type="text" id="modify-professorFirstName" name="modify_professorFirstName" placeholder="" value="#" required="">
                            </div>

                            <br/>

                            <label for="modify-professorLogin">Login :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control" type="text" id="modify-professorLogin" name="modify_professorLogin" placeholder="" value="#" required="">
                            </div>

                            <br/>

                            <label for="modify-professorEmail">Email :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input class="form-control" type="text" id="modify-professorEmail" name="modify_professorEmail" placeholder="" value="#" required="">
                            </div>
                            <br/>

                            <p class="center">
                                <button class="btn btn-lg btn-danger btn-center" type="submit"><span class="glyphicon glyphicon-trash"></span> Supprimer</button>
                                <button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button>
                            </p>
                        </form>
                    </div>
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


