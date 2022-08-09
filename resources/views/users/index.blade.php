
@include('includes.navbar')
@section('title','Home')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($users as $user)
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>{{$user['id']}}</td>
      <td><a href=" route('users.show', ['id'=> $user['id']]  ) ">{{$user['name']}}</a></td>
      <td>{{$user['email']}}</td>
      <!-- <td>{{$user['name']}}</td> -->
      <!-- <td>Otto</td> -->
      <td>
      <a href="{{ route('users.edit', ['id'=> $user['id']]  )  }}"class="btn btn-primary">Edit</a>

        <form method="POST" action="{{route('users.destroy' ,['id'=> $user['id']])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Delete</button>
</form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

