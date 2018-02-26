<!DOCTYPE html>
<html>
<head>
	<title><?php echo $titulo ?></title>
</head>
<body>
	<?php  
		foreach ($usuarios as $user):
			echo "<p>{$user->id} - {$user->nome}</p>";
		endforeach;
	?>
</body>
</html>