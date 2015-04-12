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
                        <li><a href="{{ url('professors/dashboard') }}"><span class="glyphicon glyphicon-tasks"></span>  Panel</a></li>
                        <li><a href="{{ url('professors/edit-covenant-intership') }}"><span class="glyphicon glyphicon-folder-open"></span>  Editer les conventions de stage <span class="badge">42</span></a></li>
                        <li><a href="{{ url('professors/summary-intership') }}"><span class="glyphicon glyphicon-list-alt"></span>  Récapitulatif des stages</a></li>
                        <li><a href="{{ url('professors/management-database') }}"><i class="fa fa-database"></i>  Gestion de la Bases de données</a></li>
                    </ul>
                @endsection

                @section('nav-sidebar-admin')
                    <ul class="nav nav-sidebar">
                        <li><a href="{{ url('professors/professors-management') }}"><span class="glyphicon glyphicon-user"></span>  Gestion des professeurs</a></li>
                        <li><a href="{{ url('professors/students-management') }}"><span class="glyphicon glyphicon-user"></span>  Gestion des étudiants</a></li>
                        <li class="active"><a href="{{ url('professors/edit-template-convenant') }}"><span class="glyphicon glyphicon-pencil"></span>  Modifier la convetion de stage</a></li>
                    </ul>
            </div>
            @endsection

                @section('content')
                    <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
                        <h1 class="page-header"><span class="glyphicon glyphicon-pencil"></span> Modifier la convention de stage</h1>
                        <!-- Place inside the <head> of your HTML -->
                        <script type="text/javascript" src="../tinymce/js/tinymce/tinymce.min.js"></script>
                        <script type="text/javascript">
                            tinymce.init({
                                language: "fr_FR",
                                width: 1000,
                                height: 300,
                                language : "fr_FR",/*
                                 plugins: "save",
                                 toolbar: "save | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
                                 save_enablewhendirty: true,
                                 save_onsavecallback: function() {console.log("Save");},*/

                                selector: "textarea",
                                plugins: [
                                    "advlist autolink autosave link image lists charmap print preview hr anchor pagebreak spellchecker",
                                    "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                                    "table contextmenu directionality emoticons template textcolor paste fullpage textcolor colorpicker textpattern"
                                ],

                                toolbar1: " fullpage | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | styleselect formatselect fontselect fontsizeselect",
                                toolbar2: "cut copy paste | searchreplace | bullist numlist | outdent indent blockquote | undo redo | link unlink anchor image media code | insertdatetime preview | forecolor backcolor",
                                toolbar3: "table | hr removeformat | charmap | print | ltr rtl | spellchecker | visualchars visualblocks nonbreaking template pagebreak",

                                menubar: false,
                                toolbar_items_size: 'small',

                                style_formats: [
                                    {title: 'Bold text', inline: 'b'},
                                    {title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
                                    {title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
                                    {title: 'Example 1', inline: 'span', classes: 'example1'},
                                    {title: 'Example 2', inline: 'span', classes: 'example2'},
                                    {title: 'Table styles'},
                                    {title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
                                ],

                                templates: [
                                    {title: 'Test template 1', content: 'Test 1'},
                                    {title: 'Test template 2', content: 'Test 2'}
                                ]

                            });

                        </script>


                        <!-- Place this in the body of the page content -->
                        <form name="" method="" action="" >
                            <textarea></textarea>

                            <br/>

                            <p class="center"><button class="btn btn-primary btn-lg" type="submit"><span class="glyphicon glyphicon-floppy-save"></span> Enregistrer</button></p>
                        </form>
                    </div><!--no delete-->
            </div><!--no delete-->
        </div><!--no delete-->
@endsection


