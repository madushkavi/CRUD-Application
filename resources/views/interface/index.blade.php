@extends('interface.layout')
@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Products </h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('/p')}}"> Back</a>
        </div>
    </div>
</div>
<br>
<!-- success alert message -->

@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $message }}</p>
</div>
@endif


@php($i=0)
<table class="table table-bordered">

    <tr>
        <th>No</th>
        <th>Name</th>
        <th>Details</th>
        <th>Price</th>
        <th width="280px">

        </th>
    </tr>
    @foreach($products as $product)


    <tr>
        <td>{{++$i}}</td>
        <td>{{$product->name}}</td>
        <td>{{$product->detail}}</td>
        <td>{{$product->price}}</td>
        <td>
            <form action="{{route('products.destroy',$product->id)}}" method="post">
                <a class="btn btn-primary" href="{{route('products.show',$product->id)}}">Show</a>
                <a class="btn btn-dark" href="{{route('products.edit',$product->id)}}">Edit </a>

                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>
<div class="pull-right">
    <a class="btn btn-success" href="{{route('products.create')}}"> Add Product</a>
</div>

@endsection('content')