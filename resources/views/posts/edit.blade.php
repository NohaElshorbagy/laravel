
@include('includes.navbar')
<form action="{{route('posts.update' ,$post['id'])}}" method="POST">
@method('PUT')

@csrf
<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">title</label>
    <input type="text" value ="{{ $post['title']}}" id="title" name="title" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">body</label>
    <input   name="body" id="body"value ="{{$post['body']}}" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">User_id</label>
    <input type="text" id="user_id" value ="{{$post['user_id']}}"  name="user_id" class="form-control" id="exampleInputPassword1">
  </div>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>