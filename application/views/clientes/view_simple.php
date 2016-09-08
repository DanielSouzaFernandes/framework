<div id = "main" class = "container-fluid">
    <h3 class = "page-header">Visualizar Cliente <?= $this->data['id'] ?></h3>

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
            <p><strong>CPF</strong></p>
            <p><?= $this->data['cpf']?></p>
        </div>

        <div class = "col-md-3">
            <p><strong>Telefone</strong></p>
            <p><?= $this->data['telefone'] ?></p>
        </div>
        <div class = "col-md-3">
            <p><strong>Renda</strong></p>
            <p><?= $this->data['renda']?></p>
        </div>

        <div class = "col-md-3">
            <p><strong>Data de cadastro</strong></p>
            <p><?= $this->data['data_cadastro'] ?></p>
        </div>
        <div class = "col-md-3">
            <p><strong>Endereço</strong></p>
            <p><?= $this->data['endereco_id'] ?></p>
        </div>
    </div>

    <hr />
    <div id = "actions" class = "row">
        <div class = "col-md-12">
            <a href = "<?= base_url('clientes/edt_simple/'.$this->data['id'])?>" class = "btn btn-primary">Editar</a>
            <a href = "<?= base_url('clientes\index')?>" class = "btn btn-default">Fechar</a>
        </div>
    </div>

