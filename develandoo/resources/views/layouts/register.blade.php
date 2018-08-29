@extends('layouts.index')

@section('content')
<form method="POST" action="{{url('/register')}}" enctype="multipart/form-data">
    <div class="col-md-8">
      {{csrf_field()}}
          <h1>Register</h1>
        <div class="form-group"> 
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>
        <div class="form-group"> 
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="form-group"> 
            <label for="Password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="form-group"> 
            <label for="Password">Password Confirm:</label>
            <input type="password" class="form-control" id="password_confirmed" name="password_confirmed">
        </div>

        <div class="form-group">
            <label for="age">age:</label>
            <input type="number" class="form-control" name="age"/>
        </div>

        <div class="form-group">
            <label for="profileimage">Profile image:</label>
            <input type="file" class="form-control" name="profileimage" enctype="multipart/form-data">
        </div>


         
       
        <div class="form-group"> 
            <input type="submit" value="Register" class="btn btn-primary">
       
            <a href="/login" class="btn btn-primary">Login</a>
        </div>
      </div>
    </div>
</form>
@endsection