<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }} ">

  <title>{{ config('app.name', 'Vue Laravel SPA') }} </title>

  <!-- Style  -->
  <link href="{{ mix('/css/app.css') }}" rel="stylesheet">
  <style>
    .container{
      /* padding: 30px; */
    }
  </style>
</head>
<body>
  <div id="app">
    <!-- <example-component></example-component> -->
    <header-component></header-component>

    <router-view></router-view>
  </div>
  


  <script src="{{ mix('/js/app.js') }}" defer></script>
</body>
</html>