@extends('base')

@section('content')
<body>
    <style>
        body {
            background-image: url("background.jpg");
            background-size: cover;
        }
    </style>
<div class="row">
    <div class="col-md-4 offset-md-4">
        <div class="card mt-5">
            <div class="card-header bg-dark text-white">
                <h3 class="card-title">
                    User Login
                </h3>
            </div>
            <div class="card-body">
                <form action="{{url('/login')}}" method="post">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <button class="btn btn-primary" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
    
@endsection