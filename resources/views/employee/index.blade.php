<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Employee Crud Practice</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}">
    <style>
        .btn {
            margin-right: 4px;
        }
    </style>
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

                {{-- executes when the data is updated --}}
                @if (@session('warning'))
                <div class="alert alert-warning">{{session('warning')}}
                </div>
                @endif

                <div class="card">
                    <h1 class="bg-light text-center text-success">CRUD IN LARAVEL</h1>
                    <div class="card-header bg-dark text-white d-flex justify-content-between">
                        <h3>List of Employees</h3>
                        <a href="{{route('employee.create')}}" class="btn btn-success ">+Add Employee</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            {{-- make a automatic table --}}
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Operations</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($employees as $employee)
                                <tr>
                                    <td>{{$employee->id}}</td>
                                    <td>{{$employee->name}}</td>
                                    <td>{{$employee->email}}</td>
                                    <td>{{$employee->tel}}</td>
                                    <td class="d-flex">
                                        <a href="{{route('employee.show',[$employee->id])}}"
                                            class=" btn btn-warning ">Show</a>

                                        <a href="{{route('employee.edit',[$employee->id])}}"
                                            class=" btn btn-primary ">Edit</a>

                                        <form action="{{route('employee.destroy',[$employee->id])}}" method="POST">
                                            {{-- [$employee->id] helps to fetch the id of the datas--}}
                                            @csrf
                                            @method("DELETE")
                                            <button class="btn btn-danger">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>