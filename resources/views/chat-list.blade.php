<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #222725;
  color: white;
}
</style>
</head>
<body>

<h1>A Fancy Table</h1>

<table id="customers">
  <tr>
    <th>Id</th>
    <th>Name</th>
    <th>Body</th>
    <th>Created_at</th>
  </tr>
  @foreach ($chat_list as $key=> $item)
      
  <tr>
      <td>{{$key+1}}</td>
      <td>{{$item->user->name}}</td>
      <td>{{$item->body}}</td>
      <td>{{$item->created_at}}</td>
    </tr>
    @endforeach
</table>

</body>
</html>


