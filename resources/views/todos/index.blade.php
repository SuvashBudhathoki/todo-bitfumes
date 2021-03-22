@extends('todos.layout')
@section('content')
    <div class="flex justify-between border-b pb-4 px-4">
        <h1 class="text-2xl">All your todos</h1>
        <a href="{{route('todo.create')}}" class="mx-5 py-2 text-blue-400 cursor-pointer text-white ">
            <span class="fas fa-plus-circle" />
        </a>
    </div>
    <x-alert />
            @if($todos)
                <ul class="my-5">
                @if($todos->count() > 0)
                    @foreach($todos as $todo) 
                        <li class="flex justify-between p-2">
                        <div>                      
                          @include('todos.completeButton')
                        </div>

                            @if($todo->completed)
                                <p class="line-through">{{$todo->title}}</p>
                            @else
                                <a class="cursor-pointer " href="{{route('todo.show', $todo->id)}}">{{$todo->title}}</a>
                            @endif
                            <div>
                                <!-- View todo list -->
                                <a href="{{route('todo.edit', $todo->id)}}" class="text-orange-400 cursor-pointer">
                                    <span class="fas fa-view" />
                                </a>
                                <!-- Edit -->
                                <a href="{{route('todo.edit', $todo->id)}}" class="text-orange-400 cursor-pointer">
                                    <span class="fas fa-edit" />
                                </a>
                                <!-- Delete todo list -->
                                <span 
                                    onclick="event.preventDefault(); 
                                        if(confirm('Do you want to delete this task?')) {
                                            document.getElementById('form-delete-{{$todo->id}}')
                                            .submit()}"
                                    class="fas fa-trash text-gray-500 cursor-pointer px-2" />
                                    <form style="display: none;" id="{{'form-delete-'. $todo->id}}" method="post" action="{{route('todo.destroy', $todo->id)}}">
                                        @csrf
                                        @method('delete')
                                    </form> 
                            </div>
                        </li>
                    @endforeach
                    @else
                        <p>No todos to complete. Create one. </p>
                    @endif
                </ul>
            @endif

@endsection