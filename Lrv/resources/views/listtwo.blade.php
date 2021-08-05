<h1> lsit </h1>
<table border="1">
   <tr>
      <td> Name </td>
      <td> Product ID </td> 
      <td> Taka </td>
   <tr>
    @foreach ($pro_pms as $item)
    <tr>
        <td> {{$item['name']}} </td>
        <td> {{$item['id']}} </td> 
        <td> {{$item['payment']}} </td>
    </tr> 
    @endforeach
</table>