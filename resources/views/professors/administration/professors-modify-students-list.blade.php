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
                        <li><a href="{{ url('professors/students-management') }}"><span class="glyphicon glyphicon-user"></span> Les étudiants</a></li>
                        <li class="active"><a href="{{ url('professors/modify-students-list') }}"><span class="glyphicon glyphicon-pencil"></span>  Modifier la liste d'étudiants</a></li>
                    </ul>
                </div>
                @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-user"></span>Modifier la liste des étudiant</h1>
                        <div class="alert alert-danger">
                            <p><span class="glyphicon glyphicon-warning-sign"></span> Afin que l'importation de la liste s'effectue avec succès, il est recommandé de télécharger le fichier CSV de base et de l'utiliser pour l'importation !</p>
                            <p class="center"><a class="btn btn-danger btn-sm" href="../resources/template_list_students.csv" role="button"><span class="glyphicon glyphicon-download-alt"></span> Télécharger le fichier CSV de base</a></p>
                        </div>
                        <form name="" method="" action="" enctype="multipart/form-data">
                            <label for="list-csv-fileUpload">fichier CSV :</label>
                            <input class="btn btn-group-lg" type="file" id="list-csv-fileUpload" name="list-csv_fileUpload" placeholder="" required="">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
                            <p style="text-align: center;"><button class="btn btn-primary btn-group-lg" type="submit"><span class="glyphicon glyphicon-open"></span>  Importer la liste</button></p>
                        </form>

                    </div><!--no delete-->
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


