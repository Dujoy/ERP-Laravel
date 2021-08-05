<html>
<head>
   <title> Delete-Buyer </title>
   <link rel = "stylesheet" type="text/css" href="Css/deletebuy.css">
</head>

<body>
    <div class ="Delete-Buyer">
	 <h1> Delete-Buyer </h1>
	 <form action ="{{url('/del')}}" method ="post">
	   @csrf
	   <p> Id: </p>
	   <input type ="text" name ="id" placeholder="ID">
	   <button type = "submit"> Delete </button>
	   @error('id')
       <span class ="text-denger">{{$message}}</span>
       @enderror

	 </form>
	</div>   

</body>
</html>