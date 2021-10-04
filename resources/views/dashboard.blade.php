@extends('base')

@section('content')
    <style>
      body {
        background-color: azure;
      }
      h1, .welcome {
        text-align: center;
      }
      h1 {
        padding-top: 20px;
      }
    </style>
<body>
    <div class="container">
      
      <h1>List of Items</h1>
      <div class="mb-2" style="float: right;">
        <a href="{{url('dashboard/create')}}" class="btn btn-primary" data-toggle="modal" data-target="#createItemModal">
          Add Item
        </a>
      </div>
        <table class="table table-bordered table-striped table-sm table-info">
            <thead class="theadstyle">
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>&nbsp;</th>
            </thead>
            <tbody>
                @foreach($items as $item)
        
                <tr class="data-row">
                    <td class="name">{{$item->name}}</td>
                    <td class="description">{{$item->description}}</td>
                    <td class="price">{{$item->price}}</td>
                    <td class="quantity">{{$item->quantity}}</td>
                    <td class="text-center" style="width: 150px;">
                        <a href="{{ url('dashboard/edit/' . $item->id) }}" class="btn btn-primary btn-sm d-inline">Edit</a>
                        <a href="{{ url('dashboard/delete/' . $item->id) }}" class="btn btn-danger btn-sm" type="submit">Delete</a>
                    </td>
                </tr>
        
                @endforeach
            </tbody>
        </table>  
    </div>
</body>
</html>
@endsection