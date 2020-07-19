<form action="{{ route('registrar_produto') }}" method="post">
    @csrf
    <h1>Produtos</h1>
    <?php //var_dump($produtos[0]->id);die; ?>
    <?php
    if(isset($message) && !empty($message)) {
        echo "<h2>" . $message . "</h2>";
    }
    ?>
    <p><a href="<?php echo url('/produtos/novo'); ?>" class="btn btn-success">Cadastrar Produto</a></p>
    <table class="table table-bordered table-condensed table-striped">
        <thead>
            <tr>
                <th>Nome</th>
                <th colspan="3" class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($produtos->count()) {
            $html_produtos = '';
            foreach($produtos as $key => $value) {
                $html_produtos .= '<tr>';
                    $html_produtos .= '<td><input type="hidden" value="' . $value->id . '" />'.$value->nome.'</td>';
                    $html_produtos .= '<td class="col-1 text-center"><a href="' . url('/produto/visualizar/' . $value->id) . '" class="btn btn-info">Visualizar</a></td>';
                    $html_produtos .= '<td class="col-1 text-center"><a href="' . url('/produto/editar/' . $value->id) . '" class="btn btn-warning">Editar</a></td>';
                    $html_produtos .= '<td class="col-1 text-center"><a href="' . url('/produto/excluir/' . $value->id) . '" class="btn btn-danger">Excluir</a></td>';
                $html_produtos .= '</tr>';
            }
        } else {
            $html_produtos = '<tr><td coslpan="2"><em>Não há Produtos Cadastrados</em></td></tr>';
        }

        echo $html_produtos;
        ?>
        </tbody>
    </table>
    <p><a href="<?php echo url('/'); ?>" class="btn btn-primary">Voltar</a></p>
</form>
