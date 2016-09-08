<div id = "main" class = "container-fluid">
    <h3 class = "page-header">Visualizar Pedido <?= $this->data['id'] ?></h3>

    <div class = "row">
        <div class = "col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $this->data['id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Funcionário</strong></p>
            <p><?= $this->data['funcionario_id'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Cliente</strong></p>
            <p><?= $this->data['cliente_id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Data do cadastro</strong></p>
            <p><?= $this->data['data_cadastro'] ?></p>
        </div>
    </div>

    <hr />
    <div id = "actions" class = "row">
        <div class = "col-md-12">
            <a href = "<?= base_url('pedidos/edt_simple/'.$this->data['id'])?>" class = "btn btn-primary">Editar</a>
            <a href = "<?= base_url('pedidos\index')?>" class = "btn btn-default">Fechar</a>
        </div>
    </div>

