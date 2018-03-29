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
            
            <div class="col-sm-3 center-block">
                @if(!$todo->completed)
                <a href="{{ route('todo.completed',['id' => $todo->id])}}" class="btn btn-success btn-xs"><i class="fa fa-check"></i></a>
                @else 
                <a href="javascript:void(0)" class="btn btn-light btn-xs"><i class="fa fa-check"></i></a>
                @endif
                <a href="{{ route('todo.update',['id' => $todo->id])}}" class="btn btn-info btn-xs"><i class="fa fa-edit"></i></a>
                <a href="{{ route('todo.delete',['id' => $todo->id])}}" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
            </div>
             
            </div>
            <hr>
    @endforeach
@stop
