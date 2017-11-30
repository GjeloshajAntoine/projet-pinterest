	<link rel="stylesheet" href="Assets/upload.css">
	<link href="Assets/signup.css" rel="stylesheet">
	<link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">

<body class="uploadBody">
		<!-- HEADER STARTS HERE -->
		<div class="header-wrapper">
				<a href="index.php?action=home">
				<div class="logo-header"><img alt="logo" src="https://i.imgur.com/awbs7PX.png"></div></a> <a href="index.php?action=uploadPage">
				<div class="upload-header"><img alt="logo" src="https://i.imgur.com/yKgtMFi.png"></div></a>
				<div class="search-header">
					<input name="search-header-bis" placeholder="" type="text">
				</div><a href="index.php?action=admin">
				<div class="admin-header"><img alt="logo" src="https://i.imgur.com/PkGEZTB.png"></div></a> <a href="index.php?action=logout">
				<div class="logout-header"><img alt="logo" src="https://i.imgur.com/UJ1Y6RI.png"></div></a>
			</div><!-- HEADER ENDS HERE -->
			<div class="space"></div>
<div class="formWrapper">
	<header class="uploadHeader"> <img src="Assets/images/logo.png" alt=""> <h2>Upload</h2> </header>
	<form action="index.php?action=updloadData" method="post" enctype="multipart/form-data">



		<div class="input-file-container">
			<input class="input-file" id="my-file" name="url" type="file">
			<label class="uploadLabel" tabindex="0" for="my-file" class="input-file-trigger">
				<img src="Assets/images/upload.png" alt="" /><br> Select a file...</label>
		</div>

		<label for="titre"></label>
		<input type="text" name="titre" id="up_title" placeholder="Titre"/><br/><br/>

		<label for="description"></label>
		<input type="text" name="description" id="up_description" placeholder="Descritpion"/>

	 	<input type="submit" value="Valider" id="up_button"/>

	</form>
</div>
  	<!-- FOOTER STARTS HERE -->
	  <div class="footer">
			<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
	  </div>
		<!-- FOOTER ENDS HERE -->

</body>
