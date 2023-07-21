<!DOCTYPE html>
<html>
<head>
	 <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
  <title>Admin page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
   
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
#abc{
  width: 450px;
  height: 20px;
  font-size: 20px;
  float:left;
  font-family: serif;
  color: #fff
}
    </style>
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">MyBlog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Pages 
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="contact">Contact</a></li>
          <li><a href="about">About Us</a></li>
          <li><a href="learnmore">Learn More</a></li>
          @role('Admin')
          <li><a href="adminpage">Online Users</a></li>
          <li><a href="languages">Language page</a></li>
          @endrole
        </ul>
      </li>
    </ul>
    <div id="abc" class="container">
        {{ Auth::user()->name }}   Are you admin?? realy?!!
    </div>
   
    <form id="btn" action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
  </div>
</nav>
<div class="card">
  <div class="card-header text-center">
   <h2>Users List</h2>  
  </div><form action="{{route('registeradd')}}">
  <button class="btn btn-primary">Add Users</button>
  </form>
  <div class="card-body">
    <table class="table table-striped table-bordered">
      <thead>
        <tr>
          <th>Id</th>
          <th>Name</th>
          <th>E-mail</th>
          <th>Action</th>
        </tr>
      </thead>
       <tbody>

        @foreach ($user as $User)
          <tr>
            <td>{{$User->id}}</td>
            <td>{{$User->name}}</td>
            <td>{{$User->email}}</td>
            
            <td>
            <a href="{{'edit/' .$User->id}}" class="btn btn-success">edit</a>
            <a href="{{'delete/'.$User->id}}" class="btn btn-danger">delete</a>
           </td>
          @endforeach
    </table>
  </div>
</div>
</body>
</html>