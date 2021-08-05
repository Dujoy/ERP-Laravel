<h1> Iteam lsit </h1>
<table border="1">
   <tr>
      <td> Name </td>
      <td> ID </td> 
      <td> Action </td> 
      <td> Action </td> 
   <tr>
    @foreach ($list as $item)
    <tr>
        <td> {{$item['name']}} </td>
        <td> {{$item['id']}} </td> 
        <td><a href="/Editseller/{​​​{​​​$item1['id']}​​​}​​​">Edit</a></td>
        <td><a href="/delete1/{​​​{​​​$item1['id']}​​​}​​​">Delete</a>
    </tr> 
    @endforeach
</table>
 