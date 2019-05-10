<!DOCTYPE html>
<html>
<head>
	<title>Blog</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
	$database = [
		['title' => 'Как делать деньги?',
		'shorttext' => 'Сегодня я помогу вам сделать деньги...',
		'longtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. '
		],
		['title' => 'Как делать радугу?',
		'shorttext' => 'Сегодня я помогу вам сделать радугу...',
		'longtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. '
		],
		['title' => 'Как делать покебол?',
		'shorttext' => 'Сегодня я помогу вам сделать покебол...',
		'longtext' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco.'
		]
	];
?>

	<h2 class="main_text"> Блог </h2>
	<hr>
	<?php 
			for ($i = 0; $i < count($database); $i++) {
	?>
	<div class="main">
	<?php
		   echo '<h2 class>'.$database[$i]['title'] . ' '. '</h2>';
		   echo '<p>'.$database[$i]['shorttext'] . ' '.'</p>';
		   echo '<a href="page.php?index='. $i .'">Далее</a>';
		   echo '<hr>';

		?>
	</div>
	<?php 
			}
	?>
	
</body>
</html>