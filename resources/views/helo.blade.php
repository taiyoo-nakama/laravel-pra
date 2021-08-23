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
  <form method="POST" action="/helo" >
   @csrf
    <input type="text" name="str">
    <input type="submit">
  </form>
</body>
</html>
