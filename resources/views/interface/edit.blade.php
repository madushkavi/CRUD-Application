@extends('interface.layout')
@section('content')
<div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Update Iteam</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{url('')}}"> Back</a>
            </div>
        </div>
    </div>
   <br>
   <!-- error messages --> 

   <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
    </div>
    
    <form action="{{route('products.update',$product->id)}}" method="post">
   @csrf
   @method('PATCH')
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name" value="{{$product->name}}">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail" >{{$product->detail}}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Price:</strong>
                <input type="text" name="price" class="form-control" placeholder="Price">
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
    
    @endsection('content')