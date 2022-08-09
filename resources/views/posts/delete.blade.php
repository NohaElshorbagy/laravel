
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

      <a href="{{ route('posts.restore' ,['id'=> $post['id'] ] )  }}" class="btn btn-primary">Restore</a>

      </td>
    </tr>
   @endforeach
  </tbody>
</table>

