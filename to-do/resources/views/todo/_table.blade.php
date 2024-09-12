<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Title</th>
      <th scope="col">Description</th>
      <th scope="col">Complated</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($todos as $todo)
       <tr>
      <th scope="row"> {{$loop->iteration}}</th>
      <td>{{$todo->title}}</td>
      <td>{{$todo->description}}</td>
      <td> {{$todo->is_completed == 1 ? 'Yes' : 'No'}}</td>
      <td>
        
        <a href="{{route('todo.edit', $todo->id)}}" class="btn btn-primary">Edit</a>
        <button type="button"  onclick=" document.getElementById('delete-form').submit()"  class="btn btn-danger">Delete</a>
      </td>
    </tr>
    @empty
    <tr>
      <td colspan="5" class="text-center">No To-Do Found</td>
      </tr>
    @endforelse

  </tbody>
</table>