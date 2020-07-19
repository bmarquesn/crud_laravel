<h2>Editar dadod do Produto</h2>
<form action="{{ route('alterar_produto', ['id' => $produto->id]) }}" method="post">
    @csrf
    <div class="row">
        <div class="col"><label for="nome">Nome:</label></div>
        <div class="col"><input type="text" name="nome" id="nome" value="{{ $produto->nome }}" class="form-control" /></div>
    </div>
    <div class="row">
        <div class="col"><label for="custo">Custo:</label></div>
        <div class="col"><input type="text" name="custo" id="custo" value="{{ $produto->custo }}" class="form-control" /></div>
    </div>
    <div class="row">
        <div class="col"><label for="preco">Preço:</label></div>
        <div class="col"><input type="text" name="preco" id="preco" value="{{ $produto->preco }}" class="form-control" /></div>
    </div>
    <div class="row">
        <div class="col"><label for="quantidade">Quantidade:</label></div>
        <div class="col"><input type="text" name="quantidade" id="quantidade" value="{{ $produto->quantidade }}" class="form-control" /></div>
    </div>
    <br />
    <div class="row">
        <div class="col"><a href="<?php echo url('/produtos/listar'); ?>" class="btn btn-info">Voltar</a></div>
        <div class="col"><input type="submit" value="Salvar" class="btn btn-primary" /></div>
    </div>
</form>
