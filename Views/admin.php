<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="Assets/home.css">
  <link href="Assets/header.css" rel="stylesheet">
	<link href="Assets/footer.css" rel="stylesheet" type="text/css">
	<title>test</title>
	<meta name="viewport" content="width=device-width">
	<link rel="stylesheet" href="Assets/remodal.css">
	<link rel="stylesheet" href="Assets/remodal-default-theme.css">
</head>
<body>

<div class="grid">

  <div class="grid-sizer"></div>

<?php
foreach ($data as $champImage) { ?>

	<div class="grid-item" href="#" title="titre">
		<div>
		<img src="<?php echo "mini-imageBank/".$champImage['url']; ?>">
		<div>
			<?php echo $champImage['title']; ?>
		</div>
	</div>
		<a class="remodal-confirm" href="index.php?action=edit&id=<?php echo $champImage['photo_id'];?>">edit</a>
		<a class="remodal-cancel" href="index.php?action=deletePhoto&id=<?php echo $champImage['photo_id'];?>">delete</a>

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
</body>
</html>
