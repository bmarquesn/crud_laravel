<form action="{{ route('excluir_produto', ['id' => $produto->id]) }}" method="post">
    @csrf
    <div class="row text-center">
        <div class="col">Deseja mesmo excluir este produto?</div>
    </div>
    <div class="row text-center">
        <div class="col"><h3>{{ $produto->nome }}</h3></div>
    </div>
    <br />
    <div class="row">
        <div class="col"><a href="<?php echo url('/produtos/listar'); ?>" class="btn btn-info">Voltar</a></div>
        <div class="col"><input type="submit" value="Excluir" class="btn btn-danger" /></div>
    </div>
</form>
