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
    <form action="new" method="post">
        @csrf
        <h2>Register A New Course</h2>
        <div class="form-group">
            <label>{{('Course Name')}}</label>
            <input type='text' class="form-control @error('course_name') is-invalid @enderror" name="course_name" value="{{old('course_name')}}" autocomplete="course_name">
            @error('course_name')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <div class="form-group">
            <label>{{('Course Teacher')}}</label>
            <select type='text' class="form-control @error('course_teacher') is-invalid @enderror" name="teacher_id">
                @foreach($teachers as $teacher)
                <option value={{$teacher->teacher_id}}>{{$teacher->teacher_name}}</option>
                @endforeach
            </select>
            @error('teacher_id')
            <span class="invalid-feedback" role="alert">
                <strong>{{$message}}</strong>
            </span>
            @enderror
        </div>
        <input type="submit" value="Register Course" class="btn btn-primary mt-3">
        <a class="d-block my-3" href="all">Back</a>
    </form>
</body>

</html>
