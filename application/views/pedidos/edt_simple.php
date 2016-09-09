<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Pedido</h3>

    <form action="<?= base_url('pedidos/atualizar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" id="id" readonly value=<?= $this->data['id'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="funcionario_id">Funcionário</label>
                <input type="text" name="funcionario_id" class="form-control" id="funcionario_id" value=<?= $this->data['funcionario_id'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="cliente_id">Cliente</label>
                <input type="text" name="cliente_id" class="form-control" id="cliente_id" value=<?= $this->data['cliente_id'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="data_cadastro">Data do cadastro</label>
                <input type="text" name="data_cadastro" class="form-control" id="data_cadastro" value=<?= $this->data['data_cadastro'] ?>>
            </div>
        </div>
</div>
<hr />
<div class="row">
    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Atualizar</button>
        <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
    </div>
</div>
</form>
</div>