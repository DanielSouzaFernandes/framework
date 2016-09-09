<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar um cliente</h3>

  <form action="<?=base_url('clientes/salvar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-4">
  	  	<label for="nome">Nome do Cliente</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="cpf">CPF</label>
                <input type="text" name="cpf" class="form-control" id="cpf" placeholder="Digite o CPF">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="telefone">Telefone</label>
                <input type="text" name="telefone" class="form-control" id="telefone" placeholder="Digite o telefone">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="renda">Renda</label>
                <input type="text" name="renda" class="form-control" id="renda" placeholder="Digite a renda">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="data_cadastro">Data de cadastro</label>
                <input type="text" name="data_cadastro" class="form-control" id="data_cadastro" placeholder="Digite a data do cadastro">
          </div>
  	  <div class="form-group col-md-4">
  	  	<label for="endereco_id">Endereço</label>
                <input type="text" name="endereco_id" class="form-control" id="endereco_id" placeholder="Digite o endereço">
          </div>
        </div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Cliente</button>
		<a href="<?= base_url('produtos') ?>" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>