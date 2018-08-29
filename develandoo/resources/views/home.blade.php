@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="{{url('/addpost')}}" method="POST">
                        {{ csrf_field() }}
                            <input type="textarea" name="author" class="form-control">
                            <input type="textarea" name="category" class="form-control" >
                            <input type="text" name="title" class="form-control">
                            <textarea name="body" class="form-control"></textarea>
                            <input type="submit" value="Addpost" class="btn btn-primary">
                            
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
