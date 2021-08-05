<html>
<head>
   <title> Login </title>
   <link rel = "stylesheet" type="text/css" href="Css/login.css">
</head>

<body>
    <div class ="Login">
	 <h1> Login </h1>
	 <form action ="" method ="post">
	   @csrf
	   <p> User-name: </p>
	   <input type ="name" name ="name" placeholder="Name">
	   <span style ="color:blue">@error('name'){{$message}}@enderror</span> 

	   <p> Password: </p>
	   <input type ="password" name ="password" placeholder="Password">
	   <span style ="color:green">@error('password'){{$message}}@enderror</span> 

	   <button type = "submit"> Login </button>
	 </form>
	</div>   
	<a href="/Home">
		back to Home
	</a>

</body>
</html>