
@include('includes.navbar')
@section('title','Home')
@section('content')

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">title</th>
      <th scope="col">body</th>
      <th scope="col">user_id</th>
    </tr>
  </thead>
  <tbody>
    @foreach($posts as $post)
    <tr>
      <!-- <th scope="row">1</th> -->
      <td>{{$post['id']}}</td>
      <td>{{$post['title']}}</td>
      <td>{{$post['body']}}</td>
      <td>{{$post['user_id']}}</td>

      <td>
      <a href="{{ route('posts.edit', ['id'=> $post['id']]  )  }}"class="btn btn-primary">Edit</a>

        <form method="POST" action="{{route('posts.destroy' ,['id'=> $post['id']])}}">
        @csrf
        @method('DELETE')
        <button class="btn btn-primary">Delete</button>
</form>
      </td>
    </tr>
   @endforeach
  </tbody>
</table>

