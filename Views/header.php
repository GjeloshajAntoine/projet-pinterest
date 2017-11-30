<!-- <!DOCTYPE html>
<html>
<head>
	<title>Header</title>

	<meta charset="ISO-8859-1">
</head> -->
<!-- <body>

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
</body>
</html> -->

<!-- include conditional render-->
<!DOCTYPE html>
<html lang="en">
<head>
	<link href="Assets/header.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
</head>
<body>
	<header class='header'>
		<div class= "logo">
			<img src="Assets/images/logo.png" alt="">
			<span class="logoBrand">Devterest</span>
		</div>
		<ul class="navbar">
			<li><?php
			if(isset($_SESSION['logged'])){
				echo'<a href="index.php?action=logout">LogOut</a>';
			}else{
				echo'<a href="index.php?action=login">login</a>';
			}
				?></li>

			<li><?php
			if(isset($_SESSION['admin'])){
				echo'<a href="index.php?action=admin">admin</a>';
			}else{
				echo'<a href="index.php?action=home">home</a>';
			}
				?></li>
			<li><a href="index.php?action=uploadPage">Upload</a></li>
		</ul>
	</header>
</body>
</html>
