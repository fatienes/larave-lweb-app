<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
    <style>

        p{
            width: 350px;
            background-color:darkred;
            font-size:16px;
            color:#fff;
            border: solid 5px black;
            border-radius:5%;
            box-shadow:20px;
            font-family: sans-serif;
        }
       
    </style>
</head>
<body>
<p>Name:-{{$user->firstname}}</p>
<p>email:-{{$user->email}}</p>
<p>phone:-{{$user->phone}}</p>
<p>country:-{{$user->country}}</p>
<p>subject:-{{$user->subject}}</p>
</body>
</html>