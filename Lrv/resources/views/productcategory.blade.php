<html>
<head>
   <title>Product-Category</title>
   <link rel = "stylesheet" type="text/css" href="Css/productcategory.css">
</head>

<body>
    <div class ="Product-Category">
	 <h1> Product-Category </h1>
	 <form action ="ctg" method ="post">
	   @csrf
	   <p> Product Name: </p>
	   <input type ="text" name ="name" placeholder="Name">
	   <span style ="color:red">@error('name'){{$message}}@enderror</span>

	   <p> Brand: </p>
	   <input type ="text" name ="Brand" placeholder="Brand">
	   <span style ="color:red">@error('Brand'){{$message}}@enderror</span>

       <p> Category: </p>
	   <input type ="text" name ="category" placeholder="category">
	   <span style ="color:red">@error('category'){{$message}}@enderror</span>

	   <button type = "submit"> submit </button>
	 </form>
	</div>   
</body>
</html>