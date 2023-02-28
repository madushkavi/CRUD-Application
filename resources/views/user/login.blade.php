@extends('interface.layout')
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        @if(isset(Auth::user()->email))
        <script>
            window.location = "user/intro";
        </script>
        @endif

        @if ($message = Session::get('error'))
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{ $message }}</strong>
        </div>
        @endif


        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div><br />
        @endif

        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <h1 class="display">LOGIN </h1></br>
                <div>
                    <form method="post" action="{{url('/done')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="email">E-mail: </label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="password">Password: </label>
                            <input type="password" class="form-control" name="password">
                        </div><br>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection('content')