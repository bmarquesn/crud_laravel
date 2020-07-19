@extends('templates.template')
@section('content')
<div class="container">
    <h1>CRUD Laravel</h1>
<?php if(!isset($page) || empty($page)) { ?>
    <p>CRUD feito em <strong>Laravel</strong> para estudo e aprendizado do mesmo.</p>
    <a href="<?php echo url('/produtos/listar'); ?>" class="btn btn-primary">Produtos</a>
<?php } else { ?>
    @include($page)
<?php } ?>
</div>
@endsection
