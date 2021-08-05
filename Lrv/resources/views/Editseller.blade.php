<html>
<head>
   <title> Edit </title>
   <link rel = "stylesheet" type="text/css" href="Css/Editseller.css">
</head>

<body>
    <div class ="Edit">
	 <h1> Edit-sellerinfo </h1>
	 <form action ="" method ="post">
		 @csrf
        <p> Name: </p>
        <input type ="text" name ="name" value="{​​​{​​​$user2->name}​​​}​​​" placeholder="Name">
		<span style ="color:red">@error('name'){{$message}}@enderror</span>

	   <p> Id: </p>
	   <input type ="text" name ="id" value="{​​​{​​​$user2->id}​​​}​​​" placeholder="Id">
	   <span style ="color:red">@error('id'){{$message}}@enderror</span>

	   <button type = "submit"> Edit </button>
	 </form>
	</div>  

</body>
</html>
