<div id="main" class="container-fluid">

    <h3 class="page-header">Adicionar Produto</h3>

    <form action="<?= base_url('produtos/salvar') ?>" method="post">
        <div class="row">
            <div class="form-group col-md-6">
                <label for="descricao">Descrição</label>
                <input type="text" class="form-control" id="descricao" name="descricao" placeholder="Digite a descrição">
            </div>
            <div class="form-group col-md-6">
                <label for="fornecedor">Fornecedor</label>
                <input type="text" class="form-control" id="fornecedor" name="fornecedor_id" placeholder="Digite o fornecedor">
            </div>
            <div class="form-group col-md-4">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria_id" placeholder="Digite a categoria">
            </div>
            <div class="form-group col-md-4">
                <label for="quantidade">Quantidade</label>
                <input type="text" class="form-control" id="quantidade" name="quantidade" placeholder="Digite a quantidade">
            </div>
            <div class="form-group col-md-4">
                <label for="valor">Valor</label>
                <input type="text" class="form-control" id="valor" name="valor" placeholder="Digite o valor" >
            </div>
        </div>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar Produto</button>
                <a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
            </div>
        </div>

    </form>
</div>