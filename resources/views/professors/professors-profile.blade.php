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
                    <li class="active"><a href="{{ url('#') }}"><span class="glyphicon glyphicon-user"></span> Mon Profil</a></li>
                    <li><a href="{{ url('#') }}"><span class="glyphicon glyphicon-lock"></span> Mot de passe</a></li>
                </ul>
            </div>
@endsection

@section('content')
                <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                    <h1 class="page-header"><span class="glyphicon glyphicon-edit"></span> Modifier mon compte</h1>
                    <form class="form-horizontal" method="POST" action="{{url('#')}}">
                        <label for="professors_name">Nom :</label>
                        <div class="input-group ">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" name="name" id="professors_name" value="">
                        </div>
                        <br/>

                        <label for="professors_first_name">Prénom :</label>
                        <div class="input-group ">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" name="firstName" id="professors_first_name" value="">
                        </div>
                        <br/>

                        <label for="professors_email">Email :</label>
                        <div class="input-group">
                            <span class="input-group-addon">@</span>
                            <input type="text" class="form-control" name="email" id="professors_email" value="">
                        </div>
                        <br/>

                        <label for="professors_login">Login :</label>
                        <div class="input-group">
                            <span class="input-group-addon"><span class="glyphicon glyphicon-user" aria-hidden="true"></span></span>
                            <input type="text" class="form-control" name="login" id="professors_login" value="">
                        </div>
                        <input type="hidden" class="form-control" name="sessionName" id="professors_session" value="">
                        <input type="hidden" class="form-control" name="professorsId" id="professors_id" value="">
                        <br/>
                        <p class="center"><button class="btn btn-lg btn-primary btn-center" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
                    </form>
                </div>
        </div><!--no delete-->
    </div><!--no delete-->
@endsection


