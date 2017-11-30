<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="Assets/upload.css">
	<link href="Assets/signup.css" rel="stylesheet">
	<link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
</head>

<body>

<!--
    <div class="header-wrapper">
        <a href="index.php?action=home">
        <div class="logo-header"><img alt="logo" src="https://i.imgur.com/awbs7PX.png"></div></a> <a href="index.php?action=uploadPage">
        <div class="upload-header"><img alt="logo" src="https://i.imgur.com/yKgtMFi.png"></div></a>
        <div class="search-header">
          <input name="search-header-bis" placeholder="" type="text">
        </div><a href="index.php?action=admin">
        <div class="admin-header"><img alt="logo" src="https://i.imgur.com/PkGEZTB.png"></div></a> <a href="index.php?action=logout">
        <div class="logout-header"><img alt="logo" src="https://i.imgur.com/UJ1Y6RI.png"></div></a>
      </div>
     -->
     <?php include "Views/header.php" ?>
    <div style="margin-top:4%;" class="space"></div>
    <div class="formWrapper">
    <header class="uploadHeader"> <img src="Assets/images/logo.png" alt=""> <h2>Edit</h2> </header>


      <div class="input-file-container"></div>


  <form action="index.php?action=editData" method="POST">
    <label for="titre"></label>
    <input type="text" name="title" id="up_title" value="<?php echo $edit['title']; ?>"/>
    <br/><br/>

    <label for="description"></label>
    <input type="description" id="up_description" name="description" value="<?php echo $edit['description']; ?>"/>
    <input type="hidden" name="id" value="<?php echo $edit['photo_id']; ?>">
    <input type="submit" value="Edit" id="up_button"/>


    </form>



</body>
</html>
