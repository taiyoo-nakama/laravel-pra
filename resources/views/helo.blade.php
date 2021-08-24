<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>
  <style>
    body{ color:gray; }
    h1 { font-size:18pt; font-weight:bold; }
  </style>
</head>
<body>
  <h1>Sample</h1>
  <p><?php echo $message; ?></p>
  <table>
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>MAIL</th>
      <th>AGE</th>
      @foreach ($data as $val)
      <tr>
        <td><?php echo $val->id; ?></td>
        <td><?php echo $val->name; ?></td>
        <td><?php echo $val->mail; ?></td>
        <td><?php echo $val->age; ?></td>
      </tr>
    </tr>
    @endforeach
    <form method="POST" action="/helo" >
    @csrf
    <input type="text" name="str">
    <input type="submit">
  </form>
</table>
</body>
</html>
