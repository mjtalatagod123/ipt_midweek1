@extends('base')

@section('content')


<div class="row mt-4">
    <div class="col-md-5 offset-4">
        <div class="card">
            <div class="card-header text-center bg-danger text-white">
                <h3>Delete Item</h3>
            </div>
            <div class="card-body">
                <form action="{{url('/dashboard/delete/' . $item->id)}}" method="post">
                    {{ csrf_field() }}
                    @method('delete')
                    <h5 class="mt-2 mb-3">Delete this item? {{ $item->name }}</h5>
                    <button class="btn btn-danger px-5" type="submit">Delete Item</button>
                    <a href="{{ url('/dashboard') }}" class="btn btn-primary px-5">Cancel</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection