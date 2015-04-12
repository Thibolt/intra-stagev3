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
                    <li><a href="{{ url('professors/dashboard') }}"><span class="glyphicon glyphicon-tasks"></span> Panel</a></li>
                    <li class="active"><a href="{{ url('professors/profile') }}"><span class="glyphicon glyphicon-wrench"></span> Compte</a></li>
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
                    <li ><a href="{{ url('professors/profile') }}"><span class="glyphicon glyphicon-user"></span> Mon Profil</a></li>
                    <li class="active"><a href="{{ url('professors/password') }}"><span class="glyphicon glyphicon-lock"></span> Mot de passe</a></li>
                </ul>
            </div>
@endsection

@section('content')
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header"><span class="glyphicon glyphicon-lock"></span> Modifier mon mot de passe</h1>
                    <div class="alert alert-info">
                        <p><span class="glyphicon glyphicon-info-sign"></span> Votre mot de passe doit comporter au minimum quatre caractères !</p>
                    </div>
                    <form class="form-horizontal" name="New-Password" method="post" action="../processing/professors-modify-password-process.php">
                        <label for="old-password">Ancien mot de passe :</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input class="form-control" type="password" id="old-password" name="old_password" placeholder="" required="">
                        </div>

                        <br/>

                        <label for="new-password">Nouveau mot de passe :</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input class="form-control" type="password" id="new-password" name="new_password" placeholder="" required="">
                        </div>

                        <br/>

                        <label for="confirm-newPassword">Confirmer le nouveau mot de passe :</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                            <input class="form-control" type="password" id="confirm-newPassword" name="confirm_newPassword" placeholder="" required="">
                        </div>

                        <br/>

                        <p class="center"><button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
                    </form>
                </div>
        </div><!--no delete-->
    </div><!--no delete-->
@endsection


