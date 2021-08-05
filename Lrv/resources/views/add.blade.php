<html>
<head>
   <title> Add-Product </title>
   <link rel = "stylesheet" type="text/css" href="Css/add.css">
</head>

<body>
    <div class ="Add-Product">
	 <h1> Add-Product </h1>
	 <form action ="" method ="post">
	   @csrf
	   <p> Name: </p>
	   <input type ="text" name ="name" placeholder=" Name">
	   <span style ="color:red">@error('name'){{$message}}@enderror</span> 

	   <p> ID: </p> 
	   <input type ="text" name ="id" placeholder="Id">
	   <span style ="color:red">@error('id'){{$message}}@enderror</span>
	   
	   <button type = "submit"> Add </button>
	 </form>
	</div>   
</body>
</html>