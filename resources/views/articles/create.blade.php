@extends('app')

@section('content')

<form method="post" action="{{url('/articles')}}">
    {!! csrf_field() !!}

<div class="container">
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Title</label>
                <input type="text" name="title" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                <label for="exampleInputEmail1">Article</label>
                <input type="text" name="body" class="form-control" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="form-group">
            <div class="col-md-12">
                <hr/>
                <button type="submit" class="btn btn-danger btn-block">Submit</button>
            </div>
        </div>
   </div>
</div>
</form>



@stop