
@extends('todo.Layout.master')
@section('content')
  <div class="container mt-4">
    
    <h2>Create a new task</h2>
    <form action="{{ route('todo.store') }}" method="POST">
      @csrf
      @include('todo._form')
    </form>

  </div>
@endsection