
@extends('todo.Layout.master')
@section('content')
<div class="container mt-4">
    <h2>Create a new task</h2>
    <form action="{{ route('todo.update' ,$todo->id)}}" method="POST">
      @csrf
      @method('PUT')
      @include('todo._form')
    </form>
</div>
@endsection