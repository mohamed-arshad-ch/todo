@extends('layout')

@section('title')

    Update

@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center display-4">Update Todo</h1>
        </div>
        <div class="col-md-12">
            <form method="POST" action="{{route('update',$id->id)}}">
                @csrf
                <label for="title">Title*</label>
                <input type="text" name="title" value="{{$id->title}}" id="title" class="form-control mb-2"/>
                @error('title')

                    <small class="text-danger">{{$message}}</small>

                @enderror
                <input type="submit" class="btn btn-dark btn-block" value="Update"/>
            </form>
        </div>
    </div>
</div>

@endsection

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
