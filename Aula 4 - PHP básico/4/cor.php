<html>

	<head>
		<meta charset="utf-8">
		<title>Cor</title>
		<?php
			$tamanho = $_POST["tamanho"];
			$cor = $_POST["cor"];

		?>
		<style>
			span.texto{
				font-size:<?php echo $tamanho; ?>;
				color:<?php echo $cor; ?>;
			}

		</style>
	</head>

		<body>
			<div>

				<?php
				$txt = $_POST["texto"];
				$tamanho = $_POST["tamanho"];
				$cor = $_POST["cor"];

				echo "<span class= 'texto'>$txt</span>";


				?>

			</div>
		</body>





</html>