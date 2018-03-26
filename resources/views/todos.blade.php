@extends('layout')

@section('content')
        <hr>
        <div class="row">
            <div class="col-lg">
            </div>
            <div class="col-lg-6">
                <form action="/create/todo" method="post">
                    {{csrf_field()}}
                <input type="text" class="form-control input-lg text-center" name="todo" placeholder="Create todo">
                </form>
            </div>
            <div class="col-lg">
            </div>
        </div>

        <hr>
    @foreach($todos as $todo)
            <div class="row">
            <div class="col-lg-9">
                <p>{{$todo->todo}}</p>
            </div>
            <div class="col-sm-1">
                <a href="{{ route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger">X</a>
            </div>
            <div class="col-sm-1">
                @if(!$todo->completed)
                <a href="{{ route('todo.completed',['id' => $todo->id])}}" class="btn btn-success btn-xs">&#10004;</a>
                @else
                <span class="text-success">&#10004;</span>
                @endif
            </div>
            <div class="col-sm-1">
                <a href="{{ route('todo.update',['id' => $todo->id])}}" class="btn btn-info btn-xs">&#10000;</a>
            </div>                
            </div>
            <hr>
    @endforeach
@stop
