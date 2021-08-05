<html>
<head>
   <title> Account </title>
   <link rel = "stylesheet" type="text/css" href="Css/style.css">
</head>

<body>
    <div class ="Account">
	 <h1> Account </h1>
	 <form action ="acc" method ="post">
		@csrf
	   <p> Name: </p>
	   <input type ="text" name ="name" placeholder="Full Name">
	   <span style ="color:red">@error('name'){{$message}}@enderror</span> 

	   <p> ID: </p>
	   <input type ="password" name ="id" placeholder="ID">
	   <span style ="color:red">@error('id'){{$message}}@enderror</span> 
	   <button type = "submit"> submit </button>
	 </form>
	</div>   
</body>
</html>







