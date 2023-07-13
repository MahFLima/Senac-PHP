<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
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
			display: flex;
			justify-content: center;
			align-items: center;
			margin: 4rem 2rem;
		}

		p {
			font-size: 1rem;
		}

		main {
			display: flex;
			flex-direction: column;
			gap: 1rem;
		}

		.cont {
			width: 100%;
			max-width: 1080px;
			display: flex;
			justify-content: center;
			flex-wrap: wrap;
			gap: 2rem;
			margin-bottom: 1rem;
		}

		.card-body {
			display: flex;
			flex-direction: column;
			justify-content: space-between;
		}

		@media(min-width: 930px) {
			body {
				height: 100vh;
				margin: 0;
			}

			p {
				font-size: 0.8rem;
			}
		}
	</style>

	<main>
		<li class="list-group-item">1 - Crie as soluções abaixo utilizando a estrutura switch case:</li>
		<div class="cont">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 1</h5>
					<p class="card-text">
						Elabore um algoritmo que leia dois valores do usuário e a operação que ele deseja executar (Operações: soma, subtração, divisão, multiplicação).
						Execute a operação desejada e mostre o resultado
					</p>
					<a href="ex01.php" class="btn btn-success">GO</a>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 2</h5>
					<p class="card-text">
						Faça um algoritmo que aborde a seguinte situação: Uma loja fornece 10% de desconto para funcionários e 5% de desconto para clientes vips.
						Faça um programa que calcule o valor total a ser pago por uma pessoa. O script deverá ler o valor total da compra e um código que identifique
						se o comprador é um: • cliente comum (1), • funcionário (2), • vip (3);</p>
					<a href="ex02.php" class="btn btn-success">GO</a>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 3</h5>
					<p class="card-text">Faça um algoritmo PHP que calcule e imprima o salário reajustado de um funcionário de acordo com a seguinte regra:
						<br/>
						• salários até 300, reajuste de 50%.
						<br/>
						• salários maiores que 300, reajuste de 30%.
					</p>
					<a href="ex03.php" class="btn btn-success">GO</a>
				</div>
			</div>
		</div>
		<li class="list-group-item">2 – Crie as soluções abaixo utilizando estruturas de repetição de acordo com sua escolha:</li>
		<div class="cont">
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 4</h5>
					<p class="card-text">Faça um algoritmo em PHP que receba um valor qualquer e imprima os valores de 0 até o valor recebido, exemplo:
						<br/>
						• Valor recebido = 8
						<br/>
						• Impressão do programa = 0 1 2 3 4 5 6 7 8
					</p>
					<a href="ex04.php" class="btn btn-success">GO</a>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 5</h5>
					<p class="card-text">
						Faça um algoritmo PHP que receba um valor qualquer e calcule o seu fatorial (!), sabendo que fatorial de um número é:
						<br/> 
						• 7! = 7*6*5*4*3*2*1 4! = 4*3*2*1
					</p>
					<a href="ex05.php" class="btn btn-success">GO</a>
				</div>
			</div>
			<div class="card" style="width: 18rem;">
				<div class="card-body">
					<h5 class="card-title">Exercicio 6</h5>
					<p class="card-text">Faça um algoritmo PHP que receba dois valores quaisquer e imprime todos os valores intermediários a ele, veja exemplo: 
						<br/>
						• Primeiro Valor = 5
						<br/> 
						• Segundo Valor = 15
						<br/> 
						• Imprime: 6 7 8 9 10 11 12 13 14</p>
					<a href="ex06.php" class="btn btn-success">GO</a>
				</div>
			</div>
		</div>
	</main>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>

</html>