<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
	<title>Document</title>
</head>

<body>

	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		body {
			height: 100vh;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.cont {
			width: 100%;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 2rem;
		}

		.card-body{
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}
	</style>

	<div class="cont">
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Exercicio 1</h5>
				<p class="card-text">Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse
					valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a
					Zero".
				</p>
				<a href="ex01.php" class="btn btn-success">GO</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Exercicio 2</h5>
				<p class="card-text">Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação
					aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5". </p>
				<a href="ex02.php" class="btn btn-success">GO</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Exercicio 3</h5>
				<p class="card-text">Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de
					três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis,
					exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.</p>
				<a href="ex03.php" class="btn btn-success">GO</a>
			</div>
		</div>
		<div class="card" style="width: 18rem;">
			<div class="card-body">
				<h5 class="card-title">Exercicio 4</h5>
				<p class="card-text">Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora
					desse intervalo, informar que não existe mês com este número. Exigência, resolva esse exercício utilizando
					array.</p>
				<a href="ex04.php" class="btn btn-success">GO</a>
			</div>
		</div>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
		crossorigin="anonymous"></script>
</body>

</html>