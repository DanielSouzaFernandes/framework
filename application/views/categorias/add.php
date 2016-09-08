<div id="main" class="container-fluid">

  <h3 class="page-header">Adicionar uma categoria</h3>

  <form action="<?=base_url('categorias/salvar')?>" method="post">
  	<div class="row">
  	  <div class="form-group col-md-6">
  	  	<label for="nome">Nome</label>
                <input type="text" name="nome" class="form-control" id="nome" placeholder="Digite o nome">
          </div>

	</div>
	<hr />

	<div class="row">
	  <div class="col-md-12">
	  	<button type="submit" class="btn btn-primary">Salvar Cargo</button>
		<a href="template.html" class="btn btn-default">Cancelar</a>
	  </div>
	</div>

  </form>
 </div>
