<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Funcionário</h3>

    <form action="<?= base_url('funcionarios/salvar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="nome">Nome do funcionário</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-4">
                <label for="entrada">Entrada</label>
                <input type="text" name="entrada" class="form-control" id="entrada" placeholder="Digite a entrada">
            </div>
            <div class="form-group col-md-4">
                <label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone">
            </div>
            <div class="form-group col-md-6">
                <label for="cargo_id">Cargo</label>
                <input type="text" name="cargo_id" class="form-control" id="cargo_id" placeholder="Digite o cargo">
            </div>
            <div class="form-group col-md-6">
                <label for="endereco_id">Endereço</label>
                <input type="text" name="endereco_id" class="form-control" id="endereco_id" placeholder="Digite o endereço">
            </div>
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar</button>
                    <a href="template.html" class="btn btn-default">Cancelar</a>
                </div>
            </div>
    </form>
</div>
