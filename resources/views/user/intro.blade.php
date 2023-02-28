
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
    </div>
   <br>


Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas suscipit, doloribus saepe repellat, molestiae ullam minima beatae inventore eius voluptatum pariatur ipsam, illum nostrum eum laboriosam? Explicabo velit fugit nesciunt. A libero porro fuga, voluptate nostrum minus velit unde illo nulla quidem quos delectus veritatis aliquid accusantium, fugiat ad recusandae.

Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus expedita veritatis sint sapiente dolores, praesentium voluptates odit officia, eveniet iusto blanditiis enim. Optio cum reprehenderit architecto ex debitis ipsam iste.


Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate excepturi voluptas, fuga vero error assumenda, tempora eveniet quibusdam odio sequi quis asperiores quia!