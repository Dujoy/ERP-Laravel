<h1> Payment lsit </h1>
<table border="1">
   <tr>
      <td> ID </td>
      <td> Name </td>
      <td> User-Nmae</td> 
      <td> Password </td>
      <td> Gmail </td>
      <td> Edit </td>
      <td> Delete </td>
   <tr>

    {{-- @foreach ($new_mmbs as $item) --}}
    @foreach ($listthr as $item)
    <tr>
        <td> {{$item['id']}} </td>
        <td> {{$item['name']}} </td>
        <td> {{$item['uname']}} </td> 
        <td> {{$item['password']}} </td>
        <td> {{$item['gmail']}} </td>
        <td><a href="/edit/{​​​​​​​​{​​​​​​​​$item['id']}​​​​​​​​}​​​​​​​​">Edit</a></td>
        <td><a href="/delete/{​​​​​​​​{​​​​​​​​$item['id']}​​​​​​​​}​​​​​​​​">Delete</a>
    </tr> 
    @endforeach

</table>