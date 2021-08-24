<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Sample</h1>
    <p><?php //echo $message; ?></p>
    <table>
    <form method="post" action="/helo/new">
    @csrf
        <tr><td>NAME:</td><td><input type="text" name="name"></td></tr>
        <tr><td>MAIL:</td><td><input type="text" name="mail"></td></tr>
        <tr><td>AGE:</td><td><input type="text" name="age"></td></tr>
        <tr><td></td><td><input type="submit"></td></tr>
    </form>
    </table>
</body>
</html>