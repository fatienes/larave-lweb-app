<!DOCTYPE html>
<html lang="en">
<head>
	<!--FONT AWESOME-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--GOOGLE FONTS-->
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Fredoka+One&family=Play&display=swap" rel="stylesheet"> 
	<title>Learn More</title>
    <link rel="icon" type="image/x-icon" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ6O_PorvZhyV-fuDkF3K7hTR4miobjqCyvWw&usqp=CAU">
	<link rel="stylesheet" href="style.css">
    <style>
		
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
        div.main-body {
	display: grid;
	grid-template-columns: minmax(300px, auto)1fr;
	grid-template-areas: "navbar mainContent";
	grid-gap: 20px;
}


nav#navbar {
	grid-area: navbar;
	position: fixed;
}

nav#navbar a {
	display: block;
	border: 1px solid black;
	padding: 5px;
	margin: 10px 0;
	text-decoration: none;
	color: black;
}

main#main-doc {
	grid-area: mainContent;
}

header {
	font-size: 1.5rem;
	font-weight: bold;
}

code {
	background-color: #CCC;
	display: block;
	padding: 20px;
};

    </style>
</head>

<body>
	<div class="main-body">

	<nav id="navbar">
			<header>Documentation Menu</header>
			<a href="home" class="nav-link">
				Home</a>
				<a href="todolist" class="nav-link">
				Your to-do list</a>
			<a href="contact" class="nav-link">
				Contact Us</a>
			<a href="about" class="nav-link">
				About Us</a>
				@role('Admin')
			<a href="adminpage" class="nav-link">
				Admin Page</a>
			<a href="language" class="nav-link">
				Language</a>
				@endrole
			<a href="#Object" class="nav-link">
				Objects and Classes</a>
			<a href="#Inheritance" class="nav-link">
				Inheritance</a>
			<a href="#Polymorphism" class="nav-link">
				Polymorphism</a>
			<a href="#Abstraction" class="nav-link">
				Abstraction</a>
			<a href="#Encapsulation" class="nav-link">
				Encapsulation</a>
		</nav>

		<main id="main-doc">
			<section class="main-section" id="Intro">
				<header>
					What is C++?
				</header>
				<p>
					C++ is a general purpose programming
					language and widely used now a days '
					for competitive programming. It has
					imperative, object-oriented and generic
					programming features. C++ runs on lots of
					platform like Windows, Linux, Unix, Mac etc.
					C++ is an efficient
					and powerful language and finds wide use
					in various GUI platforms, 3D graphics and
					real-time simulations. Because of the
					inclusion of rich function libraries,
					working in C++ becomes simpler and
					convenient than C. Being object-oriented
					programming like Java, C++ provides
					the support of inheritance, polymorphism,
					encapsulation, etc. Unlike C, C++ allows
					exception handling and function overloading.
				</p>
				<p>he “Hello World” program is the first
					step towards learning any programming
					language and also one of the simplest
					programs you will learn. All you have
					to do is display the message “Hello World”
					on the screen.
					<br><br>Let us now look at the program :<br>
				</p>
				<code>
					#include<iostream>
					<br>
					using namespace std;
					<br>
					int main()
					<br>
						{
							<br>
							cout〈〈"Hello World";
							<br>
							return 0;
							<br>
						}
				</code>
				<br>
				<p>C++ is an Object Oriented Programming Language.
					<br> The main pillars of Object Oriented
					Programming are :
				</p>
				<ul>
					<li>Objects and Classes</li>
					<li>Inheritance</li>
					<li>Polymorphism</li>
					<li>Abstraction</li>
					<li>Encapsulation</li>
				</ul>
			</section>

			<section class="main-section" id="Object">
				<header>
					Objects and Classes
				</header>
				<p>
					Object-oriented programming – As the name
					suggests uses objects in programming.
					Object-oriented programming aims to
					implement real-world entities like
					inheritance, hiding, polymorphism,
					etc in programming. The main
					aim of OOP is to bind together the data
					and the functions that operate on them
					so that no other part of the code can
					access this data except that function.
				</p>
				<p><b>Object : </b>An Object is an identifiable
					entity with some characteristics and behavior.
					An Object is an instance of a Class. When a
					class is defined, no memory is allocated but
					when it is instantiated (i.e. an
					object is created) memory is allocated.
					<br>
					<b>Class : </b>The building block of C++ that
					leads to Object-Oriented programming is a Class.
					It is a user-defined data type, which holds its
					own data members and member functions, which can
					be accessed & used by creating an instance
					of that class. A class is like a blueprint for
					an object. For Example: Consider the Class
					of Cars. There may be many cars with different
					names and brand but all of them will share
					some common properties like all of them will
					have 4 wheels, Speed Limit, Mileage range etc.
					So here, Car is the class and wheels,
					speed limits, mileage are their properties.
				</p>
			</section>

			<section class="main-section" id="Inheritance">
				<header>
					Inheritance
				</header>
				<p>
					The capability of a class to derive
					properties and characteristics from
					another class is called Inheritance.
					Inheritance is one of the most important
					feature of Object Oriented Programming.
					Sub Class: The class that inherits
					properties from another class
					is called Sub class or Derived Class.
					Super Class: The class whose properties
					are inherited by sub class is called Base
					Class or Super class. Using inheritance, we
					have to write the functions only one time
					instead of three times as we
					have inherited rest of the three classes
					from base class(Vehicle).
				</p>
				<p>
					<b>Mode of Inheritance : </b><br><br>

					<b>Public Mode : </b>If we derive a sub
					class from a public base class. Then the
					public member of the base class will
					become public in the derived class and
					protected members of the base class
					will become protected in derived class.
					<br><br>
					<b>Protected Mode : </b>If we derive a
					sub class from a Protected base class.
					Then both public member and protected
					members of the base class will become
					protected in derived class.
					<br><br>
					<b>Private Mode : </b>If we derive a
					sub class from a Private base class.
					Then both public member and protected
					members of the base class will become
					Private in derived class.
					<br><br>
					<b>Types of Inheritance in C++ : </b>
					<br><br><br>
					<b>Single Inheritance :</b> In single
					inheritance, a class is allowed to inherit
					from only one class. i.e. one sub class
					is inherited by one base class only.
					<br><br>
					<b>Multiple Inheritance :</b> Multiple
					Inheritance is a feature of C++ where a
					class can inherit from more than one
					classes. i.e one sub class is inherited
					from more than one base classes.
					<br><br>
					<b>Multilevel Inheritance :</b> In this
					type of inheritance, a derived class is
					created from another derived class.
					<br><br>
					<b>Hieratical Inheritance :</b> In this
					type of inheritance, more than one sub
					class is inherited from a single base
					class i.e. more than one derived class
					is created from a single base class.
					<br><br>
					<b>Hybrid (Virtual) Inheritance :</b>
					Hybrid Inheritance is implemented by
					combining more than one type of
					inheritance.
					For example: Combining Hierarchical
					inheritance and Multiple Inheritance.
				</p>
			</section>

			<section class="main-section" id="Polymorphism">
				<header>
					Polymorphism
				</header>
				<p>
					The word polymorphism means having many
					forms. In simple words, we can define
					polymorphism as the ability of a message
					to be displayed in more than one form.
					A real-life example of polymorphism, a
					person at the same time can have
					different characteristics.
					Like a man at the same time is a father,
					a husband, an employee. So the same
					person posses different behavior in
					different situations. This is called
					polymorphism. Polymorphism is considered
					as one of the important features of Object
					Oriented Programming.
					<br>
					<b>In C++ polymorphism is mainly
						divided into two types:</b>
					<br> 1. Compile time Polymorphism<br>
					2. Runtime Polymorphism
				</p>

				<p>Compile time polymorphism: This type of
					polymorphism is achieved by function
					overloading or operator overloading.
					<br> Runtime polymorphism: This type
					of polymorphism is achieved by
					Function Overriding.
				</p>
			</section>

			<section class="main-section" id="Abstraction">
				<header>
					Abstraction
				</header>

				<p>
					Data abstraction is one of the most
					essential and important feature of object
					oriented programming in C++. Abstraction
					means displaying only essential information
					and hiding the details. Data abstraction
					refers to providing only essential information
					about the data to the outside world,
					hiding the background details or implementation.
					<br> Consider a real life example of a man driving
					a car. The man only knows that pressing the
					accelerators will increase the speed of car
					or applying brakes will stop the car but he
					does not know about how on pressing accelerator
					the speed is actually increasing, he does
					not know about the inner mechanism of the car
					or the implementation of accelerator, brakes
					etc in the car. This is what abstraction is.
				</p>

				<p>
					<b>Abstraction using Classes:</b> We can
					implement Abstraction in C++ using classes.
					Class helps us to group data members and member
					functions using available access specifiers. A
					Class can decide which data member will be
					visible to outside
					world and which is not.
					<br>
					<b>Abstraction in Header files:</b> One
					more type of abstraction in C++ can be
					header files. For example, consider the
					pow() method present in math.h header file.
					Whenever we need to calculate power of a
					number, we simply call the
					function pow() present in the math.h header
					file and pass the numbers as arguments
					without knowing the underlying algorithm
					according to which the function is actually
					calculating power of numbers.
					<br><br><b>Advantages of Data Abstraction:

					</b><br> 1. Helps the user to avoid writing
					the low level code.<br> 2. Avoids code
					duplication and increases reusability.<br>
					3. Can change internal implementation of
					class independently without
					affecting the user.<br> 4. Helps to
					increase security of an application or program
					as only important details are
					provided to the user.
				</p>
			</section>

			<section class="main-section" id="Encapsulation">
				<header>
					Encapsulation
				</header>
				<p>
					In normal terms Encapsulation is defined
					as wrapping up of data and information
					under a single unit. In Object Oriented
					Programming, Encapsulation is defined as
					binding together the data and the functions
					that manipulates them. Consider
					a real life example
					of encapsulation, in a company there are
					different sections like the accounts section,
					finance section, sales section etc. The finance
					section handles all the financial transactions
					and keep records of all the data related to
					finance.
					Similarly the sales section handles all the
					sales related activities and keep records of
					all the sales. Now there may arise a situation
					when for some reason an official from finance
					section needs all the data about sales in a
					particular
					month. In this case, he is not allowed to
					directly access the data of sales section.
					He will first have to contact some other
					officer in the sales section and then
					request him to
					give the particular data. This is what
					encapsulation is. Here the data of
					sales section and the
					employees that can manipulate them are
					wrapped under a single name “sales section”.
				</p>

				<p>
					Encapsulation also lead to data abstraction
					or hiding. As using encapsulation also hides
					the data. In the above example the data of
					any of the section like sales, finance or
					accounts is hidden from any other section.<br>
					In C++ encapsulation
					can be implemented using Class
					and access modifiers.
				</p>
			</section>
		</main>
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
INFERNO Copyright © 2021 Inferno - All rights reserved || Designed By: FATI
</div>
</div>
</footer>
</html>