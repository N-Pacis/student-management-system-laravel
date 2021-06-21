<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>
<body>
    @if(Session::has('success'))
        <div class="alert alert-success text-center">
                {{Session::get('success')}}
        </div>
    @endif 
    <h2>List Of Courses</h2>
    <a href="create" class="btn btn-primary register-student">Register A New Courses</a>
    <div class="table table-container">
        <table class="table table-bordered table-hover table-striped">
            <thead>
                <tr>
                    <th>CourseId</th>
                    <th>Course Name</th>
                    <th>Teacher</th>
                </tr>
            </thead>
            <tbody>
                @foreach($courses as $course)
                <tr>
                    <td>{{$course->course_id}}</td>
                    <td>{{$course->course_name}}</td>
                    <td>{{$course->teacher_name}}</td>
                </tr>
            @endforeach
            </tbody>    
        </table>
    </div> 
</body>
</html>