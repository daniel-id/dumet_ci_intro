<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>

	<?php foreach($artikel as $result): ?>
	<article>
		<h1><?php echo $result->judul ?></h1>
		<p><?php echo $result->detail ?></p>
		<i><?php echo $result->tanggal ?></i>
	</article>
	<?php endforeach; ?>
	
</body>
</html>