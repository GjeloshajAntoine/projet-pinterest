<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>

<body>
  <form action="index.php?action=editData" method="POST">

  <input type="text" name="title" value="<?php echo $edit['title']; ?>"/>
  <input type="description" name="description" value="<?php echo $edit['description']; ?>"/>
  <input type="hidden" name="id" value="<?php echo $edit['photo_id'];  ?>" />
  <input type="submit" value="Edit"/>


  </form>
</body>
</html>
