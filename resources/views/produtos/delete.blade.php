<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CRUD laravel - Criar Produto</title>
  </head>
  <body>
    <form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="post">
		@csrf
		<div class="row">
			<div class="col"><label for="nome">Deseja mesmo excluir este produto?</label></div>
			<div class="col"><input type="text" name="nome" id="nome" value="{{ $produto->nome }}" /></div>
		</div>
		<div class="row">
			<div class="col"><input type="submit" value="Excluir" /></div>
		</div>
	</form>
  </body>
</html>
