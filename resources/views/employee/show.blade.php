<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Emmployee Crud Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- executes when the data is created --}}
                @if (@session('success'))
                <div class="alert alert-success">{{session('success')}}
                </div>
                @endif


                {{-- executes when the data is deleted --}}
                @if (@session('errorMsg'))
                <div class="alert alert-danger">{{session('errorMsg')}}
                </div>
                @endif
                <div class="card">
                    <h1 class="bg-light text-center text-success">CRUD IN LARAVEL</h1>
                    <div class="card-header bg-dark text-white">
                        <h3>Details of Employees</h3>
                        <h4>ID of Employee: {{$employee->id}}</h4>
                        <a href="{{route('employee.index')}}" class="btn btn-info ">BACK</a>
                    </div>
                    <div class="card-body">
                        <h2>Name of Employee: {{$employee->name}}</h2>
                        <h2>Email of Employee: {{$employee->email}}</h2>
                        <h2>PhoneNo of Employee: {{$employee->tel}}</h2>
                        <h2>Employee Created: {{$employee->created_at}}</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>