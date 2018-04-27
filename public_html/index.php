<?php

	$a = $_SERVER;

	$b = preg_replace('/\W\w+\s*(\W*)$/', '$1', $_SERVER['DOCUMENT_ROOT']) . '/data';

	$c = json_decode(file_get_contents("$b/data.json"), true);

	echo "<pre>".print_r($c, true)."</pre>";

	// phpinfo();

?>

<!DOCTYPE html>

<html lang="es">

<head>

	<meta charset="UTF-8">

	<title>Heroku</title>

</head>

<body>

	<div class="ctd">Mi primer HTML con PHP en Heroku</div>
	
</body>

</html>