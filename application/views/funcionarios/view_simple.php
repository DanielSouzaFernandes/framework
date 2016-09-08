<div id = "main" class = "container-fluid">
    <h3 class = "page-header">Visualizar Funcionário <?= $this->data['id'] ?></h3>

    <div class = "row">
        <div class = "col-md-4">
            <p><strong>ID</strong></p>
            <p><?= $this->data['id']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Nome</strong></p>
            <p><?= $this->data['nome'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Entrada</strong></p>
            <p><?= $this->data['entrada']?></p>
        </div>

        <div class = "col-md-4">
            <p><strong>Telefone</strong></p>
            <p><?= $this->data['telefone'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Cargo</strong></p>
            <p><?= $this->data['cargo_id'] ?></p>
        </div>
        <div class = "col-md-4">
            <p><strong>Endereço</strong></p>
            <p><?= $this->data['endereco_id'] ?></p>
        </div>
    </div>

    <hr />
    <div id = "actions" class = "row">
        <div class = "col-md-12">
            <a href = "<?= base_url('funcionarios/edt_simple/'.$this->data['id'])?>" class = "btn btn-primary">Editar</a>
            <a href = "<?= base_url('funcionarios\index')?>" class = "btn btn-default">Fechar</a>
        </div>
    </div>

