<!DOCTYPE html>
<html>
<head>
    <!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Contact</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6O_PorvZhyV-fuDkF3K7hTR4miobjqCyvWw&usqp=CAU">
	<link rel="stylesheet" type="text/css" href="hover.css">
    <style>
      #abc{
  width: 450px;
  height: 20px;
  font-size: 20px;
  float:left;
  font-family: serif;
  color: #fff
}
        body{
margin:0;
overflow-x:hidden;
}

.footer{
background:#000;
padding:30px 0px;
font-family: 'Play', sans-serif;
text-align:center;
}

.footer .row{
width:100%;
margin:1% 0%;
padding:0.6% 0%;
color:gray;
font-size:0.8em;
}

.footer .row a{
text-decoration:none;
color:gray;
transition:0.5s;
}

.footer .row a:hover{
color:#fff;
}

.footer .row ul{
width:100%;
}

.footer .row ul li{
display:inline-block;
margin:0px 30px;
}

.footer .row a i{
font-size:2em;
margin:0% 1%;
}

@media (max-width:720px){
.footer{
text-align:left;
padding:5%;
}
.footer .row ul li{
display:block;
margin:10px 0px;
text-align:left;
}
.footer .row a i{
margin:0% 3%;
}
}
          /* Add a black background color to the top navigation */


/* Style inputs */
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

/* Style the container/contact section */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 10px;
}

/* Create two columns that float next to eachother */
.column {
  float: left;
  width: 50%;
  margin-top: 6px;
  padding: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .column, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
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
          <li><a href="adminpage">Admin sayfası</a></li>
          <li><a href="languages">Languages</a></li>
          @endrole
        </ul>
      </li>
    </ul>
    <div id="abc" class="container">
       Do you have a problem?  {{ Auth::user()->name }}
    </div>
   
    <form id="btn" action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
  </div>
</nav>
<div class="container">
  <div style="text-align:center">
    <h2>Contact Us</h2>
    <p>Swing by for a cup of coffee, or leave us a message:</p>
  </div>
  <div class="row">
    <div class="column">
      <img src="https://www.w3schools.com/w3images/map.jpg" style="width:100%">
    </div>
    <div class="column">
      <form action="{{url('contact_mail')}}"  method="POST">
        {{csrf_field()}}
        <label for="fname">First Name</label>
        <input type="text" id="fname" name="firstname" placeholder="Your name..">
        <label for="email"  name="email">E-mail</label>
        <input type="text" id="email" name="email" placeholder="Your E-mail">
        <label for="phone"  name="phone">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your Phone">
        <label for="country">Country</label>
        <select id="country" name="country">
          <option value="australia">Australia</option>
          <option value="canada">Canada</option>
          <option value="tr" selected>Turkiye</option>
          <option value="gr">Greek</option>
          <option value="ger">Germany</option>
          <option value="it">İtaly</option>
        </select>
        <label for="subject">Subject</label>
        <textarea id="subject" name="subject" placeholder="Write something.." style="height:170px"></textarea>
        <input type="submit" value="Submit">
      </form>
    </div>
  </div>
</div>
</body>
<footer>
<div class="footer">
<div class="row">
<a href="https://www.facebook.com"><i class="fa fa-facebook"></i></a>
<a href="https://www.instagram.com"><i class="fa fa-instagram"></i></a>
<a href="https://www.youtube.com"><i class="fa fa-youtube"></i></a>
<a href="https://www.twitter.com"><i class="fa fa-twitter"></i></a>
</div>
<div class="row">
<ul>
<li><a href="home">Home Page</a></li>
<li><a href="contact">Contact us</a></li>
<li><a href="learnmore">Learn More</a></li>
<li><a href="about">About Us</a></li>
</ul>
</div>

<div class="row">
INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: Mahesh 
</div>
</div>
</footer>
</html>