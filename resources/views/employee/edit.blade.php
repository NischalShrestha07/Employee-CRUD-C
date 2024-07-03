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
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card d-flex">
                    <h1 class="bg-light text-center text-success">CRUD IN LARAVEL</h1>
                    <div class="card-header bg-dark text-white">
                        <h3>Update Employee</h3>

                    </div>
                    <div class="card-body">
                        <form action="{{route('employee.update',[$employee->id])}}" method="POST">
                            @csrf
                            @method('PUT')
                            {{-- this above should be included with both post and put then only we can update the
                            details --}}
                            <div class="form-group m-3 p-1 ">
                                <label for="" class="h3">Name</label>
                                <input type="text" value="{{old('name',$employee->name)}}" name="name"
                                    placeholder="Enter Your Name" class="form-control">
                            </div>
                            <div class="form-group m-3 p-1">
                                <label for="" class="h3">Email</label>
                                <input type="email" value="{{old('email',$employee->email)}}" name="email"
                                    placeholder="Enter Your Email" class="form-control">
                            </div>

                            <div class="form-group m-4 ">
                                <button class="btn btn-primary">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>