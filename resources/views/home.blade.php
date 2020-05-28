
@extends('layout')

@section('title')

    Home

@endsection

@section('content')

<section id="todo">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="text-center display-4">Todo</h1>
            </div>
            <div class="col-md-12">

                <form method="POST" action="{{route('store')}}">
                    @csrf
                    <label for="title">Title*</label>
                    <input type="text" name="title" id="title" class="form-control mb-2"/>
                    @error('title')

                        <small class="text-danger">{{$message}}</small>

                    @enderror
                    <input type="submit" class="btn btn-dark btn-block" value="Submit"/>
                </form>

            </div>
            @foreach($todos as $todo)
                <div class="col-md-12 mt-3">
                    <div class="todo-list text-center">
                        <div class="todo-content border border-dark p-2 mb-2 d-flex justify-content-between">
                            <div>
                                <span class="lead">{{$todo->title}}</span>
                            </div>
                            <div>
                                <a href="{{ route('edit',$todo->id) }}" class="btn btn-warning">Update</a>
                                <form action="{{ route('delete',$todo->id) }}" method="POST" class="d-inline-block">
                                @csrf
                                    <input type="submit" class="btn btn-danger" value="Delete"/>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</section>

@endsection

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
