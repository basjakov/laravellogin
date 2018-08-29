@extends ('layouts.master')

@section('content')
   <main role="main">
   
     <section class="jumbotron text-center">
     @if(!Auth::check())
            <a href="/login" class="btn btn-primary my-2">Login</a>
            <a href="/register" class="btn btn-secondary my-2">Register</a>
          </p>
      @endif
        </div>
      </section>

 @if(Auth::check())
    <img src="uploads/{{$user->filename}}" class="img-responsive" alt="Cinque Terre">
 @endif
      <div class="album py-5 bg-light">
        <div class="container">
          @if(Auth::check())
              <h2>Change Password</h2>
                <form method="POST" action="/">

                      {{ csrf_field() }}
                          <div class="form-group">
                            <label for="title">Change Password</label>
                            <input type="password" class="form-control" id="password" name="password" >
                          </div>
                           <div class="form-group">
                            <input type="password" class="form-control" id="password_confirmed" name="password_confirmed" placeholder="confirm password">
                          </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-primary" >Change Password</button>
                        </div>
                          @include('layouts.error')
                </form>
           @endif
          <div class="row">
              <div class="col-sm-8 blog-main">
              

                    <nav class="blog-pagination">
                        <a class="btn btn-outline-primary" href="#">Older</a>
                        <a class="btn btn-outline-primary" href="#">Newer</a>
                    </nav>
              </div>
           
          </div>
        </div>
      </div>

    </main>
@endsection


@section('footer')
   
@endsection
