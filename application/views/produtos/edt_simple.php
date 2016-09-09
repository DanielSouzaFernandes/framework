<div id="main" class="container-fluid">

    <h3 class="page-header">Editar Pedido</h3>

    <form action="<?= base_url('produtos/atualizar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="id">ID</label>
                <input type="text" name="id" class="form-control" id="id" readonly value=<?= $this->data['id'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="descricao">Descrição</label>
                <input type="text" name="descricao" class="form-control" id="descricao" value=<?= $this->data['descricao'] ?>>
            </div>
            <div class="form-group col-md-4">
                <label for="fornecedor_id">Fornecedor</label>
                <input type="text" name="fornecedor_id" class="form-control" id="fornecedor_id" value=<?= $this->data['fornecedor_id'] ?>>
            </div>
            <div class="row">
                <div class="form-group col-md-4">
                    <label for="categoria_id">Categoria</label>
                    <input type="text" name="categoria_id" class="form-control" id="categoria_id" value=<?= $this->data['categoria_id'] ?>>
                </div>

                <div class="form-group col-md-4">
                    <label for="quantidade">Quantidade</label>
                    <input type="text" name="quantidade" class="form-control" id="quantidade" value=<?= $this->data['quantidade'] ?>>
                </div>

                <div class="form-group col-md-4">
                    <label for="valor">Valor</label>
                    <input type="text" name="valor" class="form-control" id="valor" value=<?= $this->data['valor'] ?>>
                </div>
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