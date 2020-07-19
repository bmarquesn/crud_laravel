<h2>Criar Produto</h2>
<form action="{{ route('registrar_produto') }}" method="post">
    @csrf
    <p class="row">
        <div class="col">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" id="nome" value="" class="form-control" />
        </div>
    </p>
    <p class="row">
        <div class="col">
            <label for="custo">Custo:</label>
            <input type="text" name="custo" id="custo" value="" class="form-control" />
        </div>
    </p>
    <p class="row">
        <div class="col">
            <label for="preco">Preço:</label>
            <input type="text" name="preco" id="preco" value="" class="form-control" />
        </div>
    </p>
    <p class="row">
        <div class="col">
            <label for="quantidade">Quantidade:</label>
            <input type="text" name="quantidade" id="quantidade" value="" class="form-control" />
        </div>
    </p>
    <div class="row">
        <div class="col">
            <a href="<?php echo url('/produtos/listar'); ?>" class="btn btn-success">Voltar</a>
        </div>
        <div class="col">
            <input type="submit" value="Salvar" class="btn btn-primary" />
        </div>
    </div>
</form>
