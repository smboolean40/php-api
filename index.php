<?php require __DIR__ . "/database.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Studenti Classe 40</title>
</head>
<body>
	<h1>Vuejs PHP</h1>
	<ul>
		<?php foreach($database as $student) { ?>
		<li>
			<h3><?php echo "{$student["name"]} {$student["lastname"]}"; ?></h3>
		</li>
		<?php } ?>
	</ul>
</body>
</html>