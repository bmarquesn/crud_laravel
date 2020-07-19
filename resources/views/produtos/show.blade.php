<h2>Visualizar dados do Produto</h2>
<div class="row">
    <div class="col">Nome:</div>
    <div class="col">{{ $produto->nome }}</div>
</div>
<div class="row">
    <div class="col">Custo:</div>
    <div class="col">{{ $produto->custo }}</div>
</div>
<div class="row">
    <div class="col">Preço:</div>
    <div class="col">{{ $produto->preco }}</div>
</div>
<div class="row">
    <div class="col">Quantidade:</div>
    <div class="col">{{ $produto->quantidade }}</div>
</div>
<br />
<p><a href="<?php echo url('/produtos/listar'); ?>" class="btn btn-primary">Voltar</a></p>
