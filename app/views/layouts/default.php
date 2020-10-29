<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?=$this->getMeta();?>
	<title>Document</title>
</head>
<body>
	<h1>Шаблон Default</h1>
	<?php  
	$logs = \R::getDatabaseAdapter()
            ->getDatabase()
            ->getLogger();

    debug( $logs->grep( 'SELECT' ) );?>
	<?=$content;?>
</body>
</html>