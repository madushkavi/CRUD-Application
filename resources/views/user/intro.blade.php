@extends('interface.layout')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $msg }}</p>
</div>
@endif
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Details Of the Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{url('/p')}}">Products</a>
        </div>
    </div>

    <br>


    <div class="col-lg-12 margin-tb">
        <p>Beyond this your site is all about your brand and your products. You get to choose the look, feel, and design, and you arenot competing with other sellers in a giant marketplace. For these reasons, a seller-owned website tends to be the best platform for selling online.
        </p>
        <p>When you are figuring out where to sell online, you have to define the type of product first. Based on what you want to sell, you can find platforms with as many or fewer customization options to put your product-selling business together.
        </p>
    </div>
</div>
@endsection('content')