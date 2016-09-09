<div id="main" class="container-fluid">

    <h3 class="page-header">Visualizar produto</h3>

    <div class="row">
        <div class="col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $this->data['id'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Descrição</strong></p>
            <p><?= $this->data['descricao'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Fornecedor</strong></p>
            <p><?= $this->data['fornecedor_id'] ?></p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4">
            <p><strong>Categoria</strong></p>
            <p><?= $this->data['categoria_id'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Quantidade</strong></p>
            <p><?= $this->data['quantidade'] ?></p>
        </div>

        <div class="col-md-4">
            <p><strong>Valor</strong></p>
            <p><?= $this->data['valor'] ?></p>
        </div>
    </div>
    <hr />
    <div id="actions" class="row">
        <div class="col-md-12">
            <a href="<?= base_url('produtos/edt_simple/' . $this->data['id']) ?>" class="btn btn-primary">Editar</a>
            <a href="<?= base_url('produtos') ?>" class="btn btn-default">Fechar</a>
        </div>
    </div>

</div>