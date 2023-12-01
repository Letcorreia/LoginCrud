<?php session_start(); ?>
<html>
<head>
	<title>Página Inicial</title>
	<link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
	<div id="header">
		Bem vindo a minha página!
	</div>
	<?php
	if(isset($_SESSION['valid'])) {			
		include("connection.php");					
		$result = mysqli_query($mysqli, "SELECT * FROM login");
	?>
				
		Bem vinda <?php echo $_SESSION['name'] ?> ! <a href='logout.php'>Sair</a><br/>
		<br/>
		<a href='view.php'>Visualizar e adicionar produtos</a>
		<br/><br/>
	<?php	
	} else {
		echo "Você deve estar logado para visualizar esta página.<br/><br/>";
		echo "<a href='login.php'>Login</a> | <a href='register.php'>Registrar</a>";
	}
	?>
	<div id="footer">
	Criado por <a href="http://blog.chapagain.com.np" title="Mukesh Chapagain">Mukesh Chapagain</a>
	</div>
</body>
</html>
