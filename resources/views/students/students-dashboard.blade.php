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
                    <li class="active"><a href="{{ url('students/dashboard') }}">Accueil Elèves</a></li>
                    <li ><a href="{{ url('students/research-internship') }}">Je cherche un stage</a></li>
                    <li ><a href="{{ url('students/submit-internship') }}">J'ai mon stage</a></li>
                    <li ><a href="{{ url('students/evaluate-internship') }}">Je veux évaluer mon stage</a></li>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
@endsection

@section('content')
    <!-- Main component for a primary marketing message or call to action -->
    <div class="jumbotron">
        <h1><span class="glyphicon glyphicon-search"></span> Je cherche un stage</h1>
        <p>Sous cette rubrique, tu auras la possibilité de rechercher un lieu de stage. Cette base de données contient NB ROW lieux de stage, alors si tu trouves pas un stage à moi la peur !</p>
        <p>
            <a class="btn btn-lg btn-primary" href="{{ url('#') }}" role="button">J'y vais ! &raquo;</a>
        </p>
    </div>
    <div class="jumbotron">
        <h1><span class="glyphicon glyphicon-send"></span> J'ai mon stage</h1>
        <p>L'entreprise t'a retourné le formulaire de renseignement, tu n'as plus qu'à retourner ces informations via cette rubrique afin que les professeurs établissent ta convention !</p>
        <p>
            <a class="btn btn-lg btn-primary" href="{{ url('#') }}" role="button">J'y vais ! &raquo;</a>
        </p>
    </div>
    <div class="jumbotron">
        <h1><span class="glyphicon glyphicon-star"></span> Je veux évaluer mon stage</h1>
        <p>Tu reviens de stage, et tu veux évaluer ton lieu de formation en milieu professionnel pour aider les prochains étudiants à trouver à leurs stages. C'est par Ici !</p>
        <p>
            <a class="btn btn-lg btn-primary" href="{{ url('#') }}" role="button">J'y vais ! &raquo;</a>
        </p>
    </div>
@endsection