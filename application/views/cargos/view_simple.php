<div id = "main" class = "container-fluid">
    <h3 class = "page-header">Visualizar Cargo <?= $this->data['id'] ?></h3>

    <div class = "row">
        <div class = "col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $this->data['id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Descrição</strong></p>
            <p><?= $this->data['descricao'] ?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Salário</strong></p>
            <p><?= $this->data['salario'] ?></p>
        </div>
    </div>

    <hr />
    <div id = "actions" class = "row">
        <div class = "col-md-12">
            <a href = "edit.html" class = "btn btn-primary">Editar</a>
            <a href = "<?= base_url('cargos\index')?>" class = "btn btn-default">Fechar</a>
        </div>
    </div>

