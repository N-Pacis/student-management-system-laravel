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
            <h2>Register A New Student</h2>
            <div class="form-group">
                <label>{{('First Name')}}</label>
                <input type='text' class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{old('first_name')}}" autocomplete="first_name">
                @error('first_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{('Last Name')}}</label>
                <input type='text' class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{old('last_name')}}" autocomplete="last_name">
                @error('last_name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{('Academic Year')}}</label>
                <input type='text' class="form-control @error('academic_year') is-invalid @enderror" name="academic_year" value="{{old('academic_year')}}" autocomplete="academic_year">
                @error('academic_year')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label>{{('Grade')}}</label>
                <input type='text' class="form-control @error('grade') is-invalid @enderror" name="grade" value="{{old('grade')}}" autocomplete="grade">
                @error('grade')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                @enderror
            </div>
            <input type="submit" value="Register Student" class="btn btn-primary mt-2">
        </form>
</body>
</html>