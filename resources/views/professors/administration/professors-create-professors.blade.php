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
                        <li><a href="{{ url('professors/professors-management') }}"><span class="glyphicon glyphicon-user"></span> Les professeurs</a></li>
                        <li class="active"><a href="{{ url('professors/create-professors') }}"><span class="glyphicon glyphicon-plus"></span> Créer un professeur</a></li>
                    </ul>
                </div>
                @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-plus"></span> Créer un professeur</h1>
                        <div class="alert alert-info">
                            <p><span class="glyphicon glyphicon-info-sign"></span> Le mot de passe doit contenir au minimum quatre caractères !</p>
                        </div>
                        <form  class="form-horizontal" method="post" name="createProfessor" action="../processing/professors-management-professors-add-process.php">
                            <label for="create-professorName">Nom :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control force-capital" type="text" id="create-professorName" name="create_professorName" placeholder="" required="">
                            </div>

                            <br/>

                            <label for="create-professorFirstName">Prénom :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control" type="text" id="create-professorFirstName" name="create_professorFirstName" placeholder="" required="">
                            </div>

                            <br/>

                            <label for="create-professorLogin">Login :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                                <input class="form-control" type="text" id="create-professorLogin" name="create_professorLogin" placeholder="" required="">
                            </div>

                            <br/>

                            <label for="create-professorEmail">Email :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                                <input class="form-control" type="text" id="create-professorEmail" name="create_professorEmail" placeholder="" required="">
                            </div>

                            <br/>

                            <label for="create-professorPassword">Mot de passe :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" type="password" id="create-professorPassword" name="create_professorPassword" placeholder="" required="">
                            </div>

                            <br/>

                            <label for="create-professorConfirmPassword">Confirmer le mot de passe :</label>
                            <div class="input-group">
                                <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                                <input class="form-control" type="password" id="create-professorConfirmPassword" name="create_professorConfirmPassword" placeholder="" required="">
                            </div>

                            <br/>

                            <p class="center"><button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
                        </form>
                    </div>
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


