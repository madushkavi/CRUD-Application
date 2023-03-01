@extends('interface.layout')
@section('content')
@if ($message = Session::get('success'))
<div class="alert alert-success">
    <p>{{ $msg }}</p>
</div>
@endif

<form action="{{url('\logout')}}" method="post">
    <button class="btn btn-dark" type="submit">Logout</button>
</form>
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div>
            <h2>Home Page</h2>
        </div>
        <div>
            <button class="btn btn-dark btn-lg float-right">
                <a href="{{url('/p')}}">Products</a>
            </button>
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