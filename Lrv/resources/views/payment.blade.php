<html>
<head>
   <title>Payment</title>
   <link rel = "stylesheet" type="text/css" href="Css/payment.css">
</head>

<body>
    <div class ="Payment">
	 <h1> Payment </h1>
	 <form action ="" method ="post">
	   @csrf
	   <p> Product Name: </p>
	   <input type ="text" name ="name" placeholder="Name">
	   <span style ="color:red">@error('name'){{$message}}@enderror</span>

	   <p> Product ID: </p>
	   <input type ="password" name ="id" placeholder="Id">
	   <span style ="color:red">@error('id'){{$message}}@enderror</span>

	   <p> Payment: </p>
	   <input type ="password" name ="payment" placeholder="payment">
	   <span style ="color:red">@error('payment'){{$message}}@enderror</span>


	   <button type = "submit"> Done </button>
	 </form>
	</div>   
</body>
</html>