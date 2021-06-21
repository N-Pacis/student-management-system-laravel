<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    </head>
    <body class="antialiased">
        <h1 class='app-name'>WELCOME TO STUDENT MANAGEMENT SYSTEM</h1>
        <div class="option-links-div">
            <a href="courses/all" class="btn btn-primary">Courses</a>
            <a href="students/all" class="btn btn-primary">Students</a>
        </div>
    </body>
</html>
