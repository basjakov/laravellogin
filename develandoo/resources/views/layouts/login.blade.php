@extends('layouts.index')

@section('content')


@if(isset(Auth::user()->email))
    <script type="text/javascript">
        window.location = "/successlogin";
    </script>
@endif
@if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="Close" data-dismiss="alert">X</button>
        <strong>{{$message}}</strong>
    </div>
@endif

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<form method="POST" action="{{url('/successlogin')}}">
    <div class="col-md-8">
      {{csrf_field()}}
          <h1>Sign in</h1>
      
        <div class="form-group"> 
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group"> 
            <label for="Password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>
        

        <div class="form-group"> 
            <input type="submit" value="login" class="btn btn-primary">
      
            <a href="/register"   class="btn btn-primary">Register</a>
        </div>
      </div>
    </div>
</form>
@endsection