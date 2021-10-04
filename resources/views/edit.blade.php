@extends('base')

@section('content')
<div class="row mt-4">
    <div class="col-md-5 offset-4">
        <div class="card">
            <div class="card-header text-center bg-info text-white">
                <h3>Edit Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/edit/' . $item->id)}}" method="post">
                    {{ csrf_field() }}
                    {{ method_field('PATCH') }}
                    <div class="mb-3">
                        <label for="name">Name</label>
                        <input type="text" name="name" id="name" value="{{$item->name}}" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="description">Description</label>
                        <input type="text" name="description" value="{{$item->description}}" id="description" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="price">Price</label>
                        <input type="text" name="price" value="{{$item->price}}" id="price" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="quantity">Quantity</label>
                        <input type="text" name="quantity" value="{{$item->quantity}}" id="quantity" class="form-control">
                    </div>
                    <button class="btn btn-primary px-5" type="submit">Update Item</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection