<html>
<head>
    <title>{{config('app.name')}}.@yield('title')</title>
    <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    @section('content')
    <div class="m-4">
    <nav class="navbar navbar-expand-sm navbar-light bg-light">
        <div class="container-fluid">
            <a href="#" class="navbar-brand">Laravel</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div id="navbarCollapse" class="collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a href="{{route('users.index')}}" class="nav-link">Home</a>
                    </li>

                        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Users
                </a>
                <ul class="dropdown-menu">
                  <li>  <a class="dropdown-item {{Route::currentRouteName() == "users.index" ? 'active': "" ; }}" href="{{route('users.index')}}">List</a></li>
                  <li> <a class="dropdown-item {{Route::currentRouteName() == "users.create" ? 'active': "" ; }}" href="{{route('users.create')}}">New User</a></li>
                
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Posts
                </a>
                <ul class="dropdown-menu">
                  <li>  <a class="dropdown-item {{Route::currentRouteName() == "posts.index" ? 'active': "" ; }}" href="{{route('posts.index')}}">Post</a></li>
                  <li> <a class="dropdown-item {{Route::currentRouteName() == "posts.create" ? 'active': "" ; }}" href="{{route('posts.create')}}">New Post</a></li>
                  <li> <a class="dropdown-item {{Route::currentRouteName() == "posts.delete" ? 'active': "" ; }}" href="{{route('posts.delete')}}"> deleted posts</a></li>
                
                </ul>
              </li>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</div>
 @show

    <div class="conatiner">
</div >
</body>
</html>