@extends('todos.layout')
@section('content')
    <div class="border-b pb-4">
        <h1 class="text-2xl ">Update this list</h1>
        <a href="{{route('todo.index')}}" class="mx-5 py-2 text-gray-400 cursor-pointer text-white  "><span class="fas fa-arrow-left"/></a>
        <h2>{{$todo->title}}</h2>
    </div>
    <x-alert />
    <form method="post" action="{{route('todo.update', $todo->id)}}" class="py-5">
        @csrf
        @method('patch')
        <div class="py-1" >
            <input type="text" name="title" class="py-2 px-2 border rounded " placeholder="Title" value="{{$todo->title}}"/>
        </div>
        <div class="py-1">
            <textarea name="description" class="p-2 border rounded" placeholder="Description" >{{$todo->description}}</textarea>
        </div>
        <div class='py-2'>
        @livewire('editstep', ['steps' => $todo->steps])
    </div>
        <div class="py-1">
            <input type="submit" value="Update" class="p-2 border rounded" />
        </div>
    </form>
@endsection