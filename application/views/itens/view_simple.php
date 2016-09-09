<div id = "main" class = "container-fluid">
    <h3 class = "page-header">Visualizar Item <?= $this->data['id'] ?></h3>

    <div class = "row">
        <div class = "col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $this->data['id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Pedido</strong></p>
            <p><?= $this->data['pedido_id'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Produto</strong></p>
            <p><?= $this->data['produto_id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Valor unitário</strong></p>
            <p><?= $this->data['valor_unitario'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Quantidade</strong></p>
            <p><?= $this->data['quantidade'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Valor Total</strong></p>
            <p><?= $this->data['valor_total'] ?></p>
        </div>
    </div>

    <hr />
    <div id = "actions" class = "row">
        <div class = "col-md-12">
            <a href = "<?= base_url('itens/edt_simple/'.$this->data['id'])?>" class = "btn btn-primary">Editar</a>
            <a href = "<?= base_url('itens\index')?>" class = "btn btn-default">Fechar</a>
        </div>
    </div>

