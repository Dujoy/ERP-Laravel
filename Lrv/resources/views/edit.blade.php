<html>
<head>
   <title>Edit</title>
   <link rel = "stylesheet" type="text/css" href="Css/registration.css">
</head>

<body>
    <div class ="Edit">
	 <h1> Edit </h1>
	 <form action ="" method ="post">
      @csrf
	   <p> Name: </p>
	   <input type ="text" name ="name" value="{​​​{​​​$user->name}​​​}​​​" placeholder="Name">
      <span style ="color:red">@error('name'){{$message}}@enderror</span>

	   <p> User Name: </p>
	   <input type ="text" name ="uname" value="{​​​{​​​$user->uname}​​​}​​​" placeholder="User-Name">
       <span style ="color:red">@error('uname'){{$message}}@enderror</span>
      
      <p> Password: </p>
	   <input type ="password" name ="password" value="{​​​{​​​$user->password}​​​}​​​" placeholder="Password">
      <span style ="color:red">@error('password'){{$message}}@enderror</span>
      
      <p> Gamil: </p>
	   <input type ="text" name ="gmail" value="{​​​{​​​$user->gmail}​​​}​​​" placeholder="Gmail">
      <span style ="color:red">@error('gmail'){{$message}}@enderror</span>
	   <button type = "submit"> Edit </button>
	 </form>


	</div>   
</body>
</html>