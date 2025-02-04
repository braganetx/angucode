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
			<br><br>
			<hr>
			<h3>App AngularJS</h3>
			<a href="http://localhost/sisgestorv2/app/">App#!</a>
			<br>
			<br>
			<hr>
			<p><b>PESSOA</b></p>
			<p>GET</p><code>http://localhost/sisgestorv2/contato</code>
			<p>GET Single</p><code>http://localhost/sisgestorv2/contato/{num}</code>
			<p>POST(CREATE)</p><code>http://localhost/sisgestorv2/contato/create</code>
			<p>PUT(EDIT)</p><code>http://localhost/sisgestorv2/contato/update/{num}</code>
			<p>DELETE</p><code>http://localhost/sisgestorv2/contato/delete/{num}</code>
			<br><br>
			<hr>
			<p><b>OPERADORAS</b></p>
			<p>GET</p><code>http://localhost/sisgestorv2/operadora</code>
			<p>GET Single</p><code>http://localhost/sisgestorv2/operadora/{num}</code>
			<p>POST(CREATE)</p><code>http://localhost/sisgestorv2/operadora/create</code>
			<p>PUT(EDIT)</p><code>http://localhost/sisgestorv2/operadora/update/{num}</code>
			<p>DELETE</p><code>http://localhost/sisgestorv2/operadora/delete/{num}</code>
			<br><br>
			<hr>
			<p><b>CORES</b></p>
			<p>GET</p><code>http://localhost/sisgestorv2/cores</code>
			<p>GET Single</p><code>http://localhost/sisgestorv2/cores/{num}</code>
			<p>POST(CREATE)</p><code>http://localhost/sisgestorv2/cores/create</code>
			<p>PUT(EDIT)</p><code>http://localhost/sisgestorv2/cores/update/{num}</code>
			<p>DELETE</p><code>http://localhost/sisgestorv2/cores/delete/{num}</code>
			<br>
			<br>
			<hr>
		</div>

	</div>
	<footer>
		<p style="text-align: center; margin-top: 12%;">Render <strong>{elapsed_time}</strong> seconds. <?php echo (ENVIRONMENT === 'development') ?  'CI Version <strong>' . CI_VERSION . '</strong>' : '' ?></p>
		<p style="text-align: center; margin-top: 1%;"> Copyright &copy; 2023 - <?php echo date("Y") ?> <strong>By</strong> Adão Braga!</p>
	</footer>
</body>

</html>