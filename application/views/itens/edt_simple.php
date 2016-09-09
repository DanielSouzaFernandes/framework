 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Item</h3>
  
  <form action="<?= base_url('itens/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="text" name="id" class="form-control" id="id" readonly value=<?= $this->data['id']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="pedido_id">Pedido</label>
                <input type="text" name="pedido_id" class="form-control" id="pedido_id" value=<?= $this->data['pedido_id']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="produto_id">Produto</label>
                <input type="text" name="produto_id" class="form-control" id="produto_id" value=<?= $this->data['produto_id']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="valor_unitario">Valor unitário</label>
                <input type="text" name="valor_unitario" class="form-control" id="valor_unitario" value=<?= $this->data['valor_unitario']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="quantidade">Quantidade</label>
                <input type="text" name="quantidade" class="form-control" id="quantidade" value=<?= $this->data['quantidade']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="valor_total">Valor total</label>
                <input type="text" name="valor_total" class="form-control" id="valor_total" value=<?= $this->data['valor_total']?>>
  	  </div>
	</div>
	
	<hr />
	
	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Atualizar</button>
		<a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>