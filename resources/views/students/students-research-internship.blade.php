@extends('default-students')

@section('nav-bar')
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{ url('/') }}">Intra-Stage</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li ><a href="{{ url('students/dashboard') }}">Accueil Elèves</a></li>
                    <li class="active"><a href="{{ url('students/research-internship') }}">Je cherche un stage</a></li>
                    <li ><a href="{{ url('students/submit-internship') }}">J'ai mon stage</a></li>
                    <li ><a href="{{ url('students/evaluate-internship') }}">Je veux évaluer mon stage</a></li>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
@endsection

@section('content')
    <nav class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <span class="navbar-brand" href="#">Filtres de recherche</span>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <form class="navbar-form navbar-left" role="search">
                        <label for="student-option">Option :</label>
                        <select class="form-control" id="student-option" name="student_option"  required="">
                            <option value="full">peu importe</option>
                            <option value="SISR">SISR</option>
                            <option value="SLAM">SLAM</option>
                        </select>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="rechercher">
                        </div>
                        <button type="submit" class="btn btn-default">Filtrer</button>
                    </form>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <h2 class="sub-header">Les Entreprises</h2>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>ID</th>
                <th>Entreprise</th>
                <th>Ville</th>
                <th>Code Postal</th>
                <th>Téléphone</th>
                <th>Note</th>
            </tr>
            </thead>
            <tbody>
            <tr onclick="">
                <td>1,001</td>
                <td>Lorem</td>
                <td>ipsum</td>
                <td>dolor</td>
                <td>sit</td>
                <td>dolor</td>
                <td>5/5</td>
            </tr>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
@endsection