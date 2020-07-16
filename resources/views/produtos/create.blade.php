<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CRUD laravel - Criar Produto</title>
  </head>
  <body>
    <form action="{{ route('registrar_produto') }}" method="post">
		@csrf
		<div class="row">
			<div class="col"><label for="nome">Nome:</label></div>
			<div class="col"><input type="text" name="nome" id="nome" value="" /></div>
		</div>
		<div class="row">
			<div class="col"><label for="custo">Custo:</label></div>
			<div class="col"><input type="text" name="custo" id="custo" value="" /></div>
		</div>
		<div class="row">
			<div class="col"><label for="preco">Preço:</label></div>
			<div class="col"><input type="text" name="preco" id="preco" value="" /></div>
		</div>
		<div class="row">
			<div class="col"><label for="quantidade">Quantidade:</label></div>
			<div class="col"><input type="text" name="quantidade" id="quantidade" value="" /></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Salvar" /></div>
		</div>
	</form>
  </body>
</html>