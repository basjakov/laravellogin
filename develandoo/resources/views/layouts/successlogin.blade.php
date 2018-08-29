@extends ('layouts.master')

@section('content')
   <main role="main">
   
     <section class="jumbotron text-center">
        <div class="container">
          <h1 class="jumbotron-heading">Album example</h1>
          @if(isset(Auth::user()->email))
            <div class="alert alert-danger success-block">
              <strong>Welcome {{Auth::user()->email}}</strong>
            </div>
          else 
          @endif
      <div class="album py-5 bg-light">
        <div class="container">
            <form method="POST" action="/posts">
              {{ csrf_field() }}
                  <div class="form-group">
                    <label for="title">Title:</label>
                    <input type="title" class="form-control" id="title" name="title" >
                  </div>
                  <div class="form-group">
                      <textarea id="body" name="body" class="form-control"></textarea>
                  </div>

                  <button type="submit" class="btn btn-primary" >Send</button>
                  @include('layouts.error')
            </form>
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