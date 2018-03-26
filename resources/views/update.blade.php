@extends('layout')

@section('content')

 <hr>
        <div class="row">
            <div class="col-lg-12">
                <form action="{{route('todos.save',['id' => $todo->id])}}" method="post">
                    {{csrf_field()}}
                <input type="text" class="form-control" name="todo" value="{{$todo->todo}}" placeholder="Create todo">
                </form>
            </div>
        </div>

 <hr>
@stop