<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="{{ asset('assets/icon.ico') }}" />

  	<title>Dashboard Admin SEAMOLEC</title>

  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    {{ Html::style('assets/admin/css/bootstrap.min.css') }}
    {{ Html::style('assets/admin/css/animate.min.css') }}
    {{ Html::style('assets/admin/css/paper-dashboard.css') }}
    {{ Html::style('assets/admin/css/demo.css') }}
    {{ Html::style('http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css') }}
    {{ Html::style('https://fonts.googleapis.com/css?family=Muli:400,300') }}
    {{ Html::style('assets/admin/css/themify-icons.css') }}

    {{-- SweetAlert Plugins   --}}
   {{ Html::style('assets/bower_components/sweetalert/dist/sweetalert.css') }}
   {{ Html::script('assets/bower_components/sweetalert/dist/sweetalert.min.js') }}
   @include('sweet::alert')

    {{ Html::script('assets/bower_components/tinymce/tinymce.min.js') }}
    <script>tinymce.init({ selector:'textarea' });</script>

  <body>

<!--Kode Wrapper Start-->
