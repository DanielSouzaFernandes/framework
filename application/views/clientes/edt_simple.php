 <div id="main" class="container-fluid">
  
  <h3 class="page-header">Editar Cliente</h3>
  
  <form action="<?= base_url('clientes/atualizar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="id">ID</label>
                <input type="text" name="id" class="form-control" id="id" readonly value=<?= $this->data['id']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="descricao" value=<?= $this->data['nome']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" value=<?= $this->data['cpf']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" value=<?= $this->data['telefone']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="renda">Renda</label>
                <input type="text" name="renda" class="form-control" id="renda" value=<?= $this->data['renda']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="data_cadastro">Data do Cadastro</label>
                <input type="text" name="data_cadastro" class="form-control" id="data_cadastro" value=<?= $this->data['data_cadastro']?>>
  	  </div>
	  <div class="form-group col-md-4">
  	  	<label for="endereco_id">Endereço</label>
                <input type="text" name="endereco_id" class="form-control" id="endereco_id" value=<?= $this->data['endereco_id']?>>
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