<!DOCTYPE html>
<html>
	<head>
		<title>User site</title>
		
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="style2.css" />
		
		<link rel="stylesheet" href="grid.css" />
		<link rel="stylesheet" href="normalize.css" />
		
		<?php
			session_start();
			if(!$_SESSION['loggedin'])
			{
					header ("Location:http://index.php");
					exit;
			}
			$name = $_SESSION['name'];
		?>
	</head>
	
	<body class="body">
		<div class="row">
				<header class="header_user">
					<div class="logo_user column column-4">
						<a href="user.php"><img src="logo.png" alt="logo životinje"/></a>
					</div>
				
					<div id="odjava" >
						<input type="Button" name="odjava" value="Odjava"/>
					</div>
				</header>
				
				<div class="main_user">
					<nav class="nav">
						<ul>
							<li><a href="user.php">Početna</a></li>
							<li><a href="#osobni_podatci">Osobni podatci</a></li>
							<li><a href="#školovanje">Školovanje</a></li>
							<li><a href="#iskustvo">Iskustvo</a></li>
							<li><a href="#znanja">Znanja i vještine</a></li>

							
						</ul>
					</nav>

					<div class="text_user">
						<h3 id="osobni_podatci">Osobni podatci</h3>
						<p>Ime i prezime : <b>Filip Karmazen</b></br>
							Zanimanje : <b>student</b></br>
							Datum rođenja: <b>6.10.1002.</b></br>
							Mjesto rođenja: <b>Pula</b></br>
							Mjesto boravišta: <b>Slavonski Brod</b></br>
						</p>
						</br>
						<h3 id="školovanje">Školovanje</h3>
						<p>
							Osnovna škola: <b>Đuro Pilar (Slavonski Brod)</b></br>
							Srednja škola: <b>Gimnazija Matija Mesić (jezični smjer) (Slavonski Brod)</b></br>
							Fakultet: <b>TVZ smjer računarstvo</b></br>
						</p>
						</br>
						<h3 id="iskustvo">Iskustvo</h3>
						<p>
							Iskustvo u IT-u: <b>NULL</b></br>
							Iskustvo van IT-a: <b>rad u trgovini,McDonalds,konobarenje,radnik u proizvodnji</b></br>
						</p>
						</br>
						<h3 id="znanja">Znanja i vještine</h3>
						<p>
							None</br>
						</p>
					</div>
				</div>	

				
				<footer class="footer">
					<p> Copyright Fantastic beasts 2016.</p>
				</footer>
		</div>

	</body>
</html>