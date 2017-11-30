<!--<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/home.css">
  <link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="Assets/remodal.css">
	<link rel="stylesheet" href="Assets/remodal-default-theme.css">
	<title>test</title>
	<meta name="viewport" content="width=device-width">

</head>
<body>
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
<div class="grid">

  <div class="grid-sizer"></div>

<?php
foreach ($data as $champImage) { ?>

	<a class="grid-item" data-remodal-target="<?php echo $champImage['photo_id']; ?>"  title="titre">
		<figure>
		<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
		<figcaption><?php echo $champImage['title']; ?></figcaption>
		</figure>
	</a>
	<div class="remodal" data-remodal-id="<?php echo $champImage['photo_id']; ?>">
		  <button data-remodal-action="close" class="remodal-close"></button>
			<h1><?php echo $champImage['title']; ?></h1>
			<p><?php echo $champImage['description']; ?></p>
			<img style="width:100%;" src="big-imageBank/<?php echo  $champImage['url'];?>" alt="">
			<button data-remodal-action="cancel" class="remodal-cancel">Cancel</button>
			<button data-remodal-action="confirm" class="remodal-confirm">OK</button>
	</div>
<?php
} ?>



</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://masonry.desandro.com/masonry.pkgd.js"></script>
<script src="https://imagesloaded.desandro.com/imagesloaded.pkgd.js"></script>

<script src="Javascript/home.js" type="text/javascript"></script>
<div class="footer">
	<a href="https://github.com/Harimaron/projet-pinterest/blob/master/README.md" target="blank">Devterest © 2017 All rights reserved.</a>
</div>
<script src="Assets/remodal.min.js" charset="utf-8"></script>
</body>
</html>
