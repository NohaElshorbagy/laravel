
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
      <td><a href="{{ route('users.show',  $user['id'] )  }}">{{$user['name']}}</a></td>
      <td>{{$user['email']}}</td>
      <!-- <td>{{$user['name']}}</td> -->
      <!-- <td>Otto</td> -->
      <td>
        <a href="{{ route('users.edit',  $user['id'] )  }}"class="btn btn-primary">Edit</a>
        <a href="{{route('users.destroy',  $user['id'] )}}"class="btn btn-primary">Delete</a>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

