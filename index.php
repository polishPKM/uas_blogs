<?php
	include 'conn.php';
	include 'conf.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>UAS CRUD BUAT PRODUKTIF</title>
	<link rel="stylesheet" type="text/css" href="assets/css/css.css">
</head>
<body>
	<div class="top-gray"></div>
	<div class="header">
		<div class="big-logo">DESPACITOLAND</div>
		<?php include 'menu.php';?>
</div>
<div class="content">
	<div class="container">
		<?php
			if(!is_null(get('p'))){
				switch (get('p')) {
					case 'blog':
						inc('home');
						break;
					case 'CRUD':
						switch (get('m')) {
					case 'home':
						inc('tampilan/blog/all');
						break;
					case 'add':
						inc('tampilan/blog/add');
						break;
					case 'edit':
						inc('tampilan/blog/edit');
						break;
					default:
						inc('tampilan/blog/all');
						break;
}
	break;
default:
	inc('home');
	break;
}
}else{ inc('home'); } ?>
		</div>
	</div>
</body>
</html>