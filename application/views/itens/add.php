<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Item</h3>

    <form action="<?= base_url('itens/salvar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-4">
                <label for="pedido_id">Pedido</label>
                <input type="text" name="pedido_id" class="form-control" id="pedido_id" placeholder="Digite o código">
            </div>
            <div class="form-group col-md-4">
                <label for="produto_id">Produto</label>
                <input type="text" name="produto_id" class="form-control" id="produto_id" placeholder="Digite o código">
            </div>
            <div class="form-group col-md-4">
                <label for="valor_unitario">Valor unitário</label>
                <input type="text" name="valor_unitario" class="form-control" id="valor_unitario" placeholder="Digite o valor unitario">
            </div>
            <div class="form-group col-md-6">
                <label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" id="quantidade" placeholder="Digite a quantida">
            </div>
            <div class="form-group col-md-6">
                <label for="valor_total">Valor Total</label>
                <input type="text" name="valor_total" class="form-control" id="valor_total" placeholder="Digite o Valor total">
            </div>
            <hr />

            <div class="row">
                <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">Salvar Itens</button>
                    <a href="<?= base_url('itens') ?>" class="btn btn-default">Cancelar</a>
                </div>
            </div>
        </div>
    </form>
</div>