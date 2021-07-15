<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
</head>
<body>
    <div class="container" id="app">
        <router-link to="/">CV</router-link>
        <router-link to="/adminpanel">Admin panel</router-link>
        <router-link to="/login">Login</router-link>
        <router-link to="/signup">Registration</router-link>
        <hr>
        <router-view></router-view>
    </div>
<script defer src="{{ mix('js/app.js') }}"></script>
</body>
</html>

