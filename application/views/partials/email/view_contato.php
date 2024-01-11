<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body style="background: #f1f1f1; display: flex; justify-content: start; padding: 5em 2em 5em 2em;">
	<div class="container" style="width: 100%;">
		<div class="contant" style="text-align: start; padding: 24px; border-radius: 16px; background: #fff;">
			<h3>Novo contato pelo site MF Designer</h3>
			<p>
				<strong>Nome: </strong>
				<?php echo $nome; ?>
			</p>

			<p>
				<strong>E-mail: </strong>
				<a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a>
			</p>

			<p>
				<strong>Celular/Whatsapp: </strong>
				<a href="tel:+<?php echo $celular; ?>"><?php echo $celular; ?></a>
			</p>

			<p>
				<strong>Mensagem: </strong><br>
				<?php echo $mensagem; ?>
			</p>
		</div>
	</div>
</body>

</html>
