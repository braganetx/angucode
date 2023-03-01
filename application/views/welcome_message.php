<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
	<meta charset="utf-8">
	<title>API CI CREAGO</title>
</head>

<body>

	<div style="text-align: center; margin-top: 3%;">
		<h1>Welcome API feita em CodeIgniter!</h1>

		<div id="body">
			<p>Acessos</p>
			<br>
			<p>GET</p><code>http://localhost/sisgestorv2/contato</code>
			<p>GET Single</p><code>http://localhost/sisgestorv2/contato/{num}</code>
			<p>POST(CREATE)</p><code>http://localhost/sisgestorv2/contato/create</code>
			<p>PUT(EDIT)</p><code>http://localhost/sisgestorv2/contato/update/{num}</code>
			<p>DELETE</p><code>http://localhost/sisgestorv2/contato/delete/{num}</code>
		</div>

		<p style="text-align: center; margin-top: 12%;">Render <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CI Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		<p style="text-align: center; margin-top: 1%;"><strong>By</strong> Adão Braga.</p>
	</div>

</body>

</html>