
@extends('base')

@section('content')
    <div class="mt-2"><a href="{{ url('/dashboard') }}" class="btn btn-primary"><< Back</a></div>
    <div class="row mt-4 mb-2">
        
        <div class="col-md-5 offset-4">
            <div class="card">
                <div class="card-header text-center bg-info text-white">
                    <h3>Create New Item</h3>
                </div>
                <div class="card-body">
                    <form action="{{url('/dashboard')}}" method="post">
                        {{ csrf_field() }}
                        <div class="mb-3">
                            <label for="name">Item Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="description">Description</label>
                            <input type="text" name="description" id="description" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="price">Price</label>
                            <input type="text" name="price" id="price" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="quantity">Quantity</label>
                            <input type="text" name="quantity" id="quantity" class="form-control">
                        </div>
                        <button class="btn btn-primary px-5" type="submit">Create Item</button>
                    </form>
                </div>
            </div>
        </div>
        
    </div>

@endsection