<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Pedido</h3>

    <form action="<?= base_url('pedidos/salvar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="funcionario_id">Nome do funcionário</label>
                <input type="text" name="funcionario_id" class="form-control" id="funcionario_id" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-4">
                <label for="cliente_id">Nome do cliente</label>
                <input type="text" name="cliente_id" class="form-control" id="cliente_id" placeholder="Digite o nome">
            </div>
            <div class="form-group col-md-4">
                <label for="data_cadastro">Data do Cadastro</label>
                <input type="text" name="data_cadastro" class="form-control" id="data_cadastro" placeholder="Digite a data">
            </div>
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar Pedido</button>
                    <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>