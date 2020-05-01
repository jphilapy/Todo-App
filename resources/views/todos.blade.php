@extends('layout')
@section('content')

<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
    <form action="{{ route('todo.store') }}" method="post">
    @csrf
        <input type="text" class="form-control input-lg" name="todo" placeholder="Create a new todo">
    </form>
    </div>
</div>
<hr>
    @foreach($todos as $todo)
        <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger">X</a>
        <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">update</a>
        | {{ $todo->todo }} | 
        @if(!$todo->completed)
        <a href="{{ route('todo.complete', ['id' => $todo->id]) }}" class="btn btn-success btn-xs">complete</a>
        @else
        <span class="text-success">Completed!</span>
        @endif
       
        <hr>
    @endforeach
@endsection