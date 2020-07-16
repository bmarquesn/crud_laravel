<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>CRUD Laravel - Criar Produto</title>
  </head>
  <body>
    <form action="{{ route('registrar_produto') }}" method="post">
        @csrf
        <h1>Produtos</h1>
        <?php //var_dump($produtos[0]->id);die; ?>
		<table class="table table-bordered table-condensed table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th colspan="2">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php
            if($produtos->count()) {
                $html_produtos = '';
                foreach($produtos as $key => $value) {
                    $html_produtos .= '<tr>';
                        $html_produtos .= '<td><inút type="hidden" value="'.$value->id.'" />'.$value->nome.'</td>';
                        $html_produtos .= '<td><input type="button" value="Editar" class="btn btn-warning" /></td>';
                        $html_produtos .= '<td><input type="button" value="Excluir" class="btn-danger" /></td>';
                    $html_produtos .= '</tr>';
                }
            } else {
                $html_produtos = '<tr><td coslpan="2"><em>Não há Produtos Cadastrados</em></td></tr>';
            }

            echo $html_produtos;
            ?>
            </tbody>
        </table>
	</form>
  </body>
</html>
