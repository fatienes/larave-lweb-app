<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>About Us</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
    .About-us {
	  width: 100%;
	  text-align: center;
	  background-color: #ccc;
	  margin-top: 30px;
	  margin-bottom: 30px;
	}
	h1{
	  color: red;
	  font-size: 35px;
	}
	img {
	  border-radius: 50%;
	}
	
	p {
	  font-size: 20px;
	} 
    h3 {
	  text-shadow:
	}
    #a {
      padding: 20px;
	  text-align: center;
	  text-decoration: none;
	  margin: 5px 2px;
	  background: #3B5998;
      color: white;
	  border-radius: 8px;
	 font-size: 50px;	  
   } 
   #btn{
    float: right;
}
#abc{
  width: 450px;
  height: 20px;
  font-size: 20px;
  float:left;
  font-family: serif;
  color: #fff
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
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="home">MyBlog</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="home">Home</a></li>
      
    </ul>
    <div id="abc" class="container">
       About Us, {{ Auth::user()->name }}
    </div>
   
    <form id="btn" action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
  </div>
</nav>
  <div class="About-us">
    <h1> About Us </h1>
	<img src="https://s3.ap-south-1.amazonaws.com/s3.studytonight.com/tutorials/uploads/pictures/1628677506-101156.png">
	<p>Our mission is to empower young Students to be the inventors and creators.</p>
	<hr>
	<p>In a world where so much is being done for technology and so little for the environment, education is not even a part of most discussions.</p>
    <p>We at Studytonight believe that by widening the reach of education, by making it freely available, so much can be achieved.</p>
    <p>And this journey started in 2013 when a young boy thought "wouldn't it be great, to have a website, with simple tutorials for programming languages, just like a friend would teach you!", and Studytonight was born.</p>
   <h3> follow us on </h3>
   <a id="a" href="#" class="fa fa-facebook"></a> 
   <a href="#" id="a" class="fa fa-twitter"></a> 
   <a href="#" id="a" class="fa fa-linkedin"></a> 
  </div>
</body>
</html>