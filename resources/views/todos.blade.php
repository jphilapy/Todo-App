@extends('layout')
@section('content')

<div class="row">
    <div class="col-lg-12 col-lg-offset-3">
        <form action="{{ route('todo.store') }}" method="post">
            @csrf
            <input type="text" class="form-control input-lg" name="todo"
                placeholder="Type a new task and press the enter button.">
        </form>
    </div>
</div>
<hr>
<div>
    @foreach($todos as $todo)
    <div class="row  border-bottom mb-1 pb-1 ml-2">
        <div class="col-4 pl-0">
            <a href="{{ route('todo.delete', ['id' => $todo->id]) }}" class="btn btn-danger w-10">X</a>
            <a href="{{ route('todo.update', ['id' => $todo->id]) }}" class="btn btn-info btn-xs">update</a>
        </div>
        <div class="col-2 pt-2"> {{ $todo->todo }} </div>

        <div class="col-2 pt-2">
            @if(!$todo->completed)
            <a href="{{ route('todo.complete', ['id' => $todo->id]) }}" class="btn btn-success btn-xs">complete</a>
            @else
            <span class="text-success">Completed!</span>
            @endif
        </div>

        <hr>
    </div>
    @endforeach
</div>
@endsection
