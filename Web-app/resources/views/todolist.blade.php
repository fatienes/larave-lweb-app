<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>To-do List</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css">
    <script type="text/javascript" src="https://cddnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.js"></script>
    <style>
        #abc{
  width: 450px;
  height: 20px;
  font-size: 20px;
  float:left;
  font-family: serif;
  color: #fff
}
        #btn{
    float: right;
}
#src{
   margin-right: 150px;
}
@import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

body {
  margin: 0;
  box-sizing: border-box;
}
/* CSS for header */
.header {
  
  width: 100%;
  max-width: 1900px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background-color: #f5f5f5;
}

.header .logo {
  font-size: 25px;
  font-family: 'Sriracha', cursive;
  color: #000;
  text-decoration: none;
  margin-left: 30px;
}

.nav-items {
  display: flex;
  justify-content: space-around;
  align-items: center;
  background-color: #f5f5f5;
  margin-right: 20px;
}

.nav-items a {
  text-decoration: none;
  color: #000;
  padding: 35px 20px;
}
    </style>
</head>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">MyBlog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      
    </ul>
    <div id="abc" class="container">
       Your todo list, {{ Auth::user()->name }}
    </div>
   
    <form id="btn" action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
  </div>
</nav>
<body class="bg-info">
    <div class="container w-25 mt-5">
        <div class="card shadow-sm">
            <div class="card-body">
                <h3>To-do List</h3>
                <form action="{{ route('store')}}" method="post" autocomplate="off">
                    @csrf
                    <div class="input-group">
                        <input type="text" name="content" class="form-control" placeholder="Add your new todo">
                        <button type="submit" class="btn btn-dark btn-sm px-4"><i class="fas fa-plus"></i></button>
                    </div>
                </form>
                @if (count($todolists))
                <ul class="list-group list-group-flush mt-3">
                    @foreach ($todolists as $todolist)
                    <li class="list-group-item">
                        <form action="{{ route('destroy' , $todolist->id) }}" method="post">
                            {{$todolist->content}}
                            @csrf
                            @method('delete')
                            <button type="submit" clas="btn btn-link btn-sm float-end"><i class="fas fa-trash"></i></button>
                        </form>
                    </li>
                    @endforeach
                </ul>
                @else
                <p class="text-center mt-3">No Task!</p>
                @endif
            </div>
            @if (count($todolists))
            <div class="card-footer">
                You Have {{ count($todolists)}} pending tasks
            </div>
            @else
            @endif
        </div>
    </div>

</body>
</html>