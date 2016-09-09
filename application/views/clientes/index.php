<div id="main" class="container-fluid" style="margin-top: 50px">

    <div id="top" class="row">
        <div class="col-sm-3">
            <h2>Clientes</h2>
        </div>
        <div class="col-sm-6">

            <div class="input-group h2">
                <input name="data[search]" class="form-control" id="search" type="text" placeholder="Pesquisar Clientes">
                <span class="input-group-btn">
                    <button class="btn btn-primary" type="submit">
                        <span class="glyphicon glyphicon-search"></span>
                    </button>
                </span>
            </div>

        </div>
        <div class="col-sm-3">
            <a href="<?= base_url('clientes/add') ?>" class="btn btn-primary pull-right h2">Novo Cliente</a>
        </div>
    </div> <!-- /#top -->


    <hr />
    <div id="list" class="row">

        <div class="table-responsive col-md-12">
            <table class="table table-striped" cellspacing="0" cellpadding="0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>CPF</th>
                        <th>Telefone</th>
                        <th>Renda</th>
                        <th>Data Cadastro</th>
                        <th>Endereço</th>
                        <th class="actions">Ações</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($this->data as $item) {
                            $view = "clientes/view_simple/" . $item['id'];
                            $edt = "clientes/edt_simple/" . $item['id'];
                            $delete = "clientes/delete/" . $item['id'];

                            echo "<tr>
					<td>" . $item['id'] . "</td>
					<td>" . $item['nome'] . "</td>
					<td>" . $item['cpf'] . "</td>
					<td>" . $item['telefone'] . "</td>
					<td>" . $item['renda'] . "</td>
					<td>" . $item['data_cadastro'] . "</td>
					<td>" . $item['endereco_id'] . "</td>
					<td class='actions'>
						<a class='btn btn-success btn-xs' href=" . base_url($view) . ">Visualizar</a>
						<a class='btn btn-warning btn-xs' href=" . base_url($edt) . ">Editar</a>
						<a class='btn btn-danger btn-xs'  href=" . base_url($delete) . " >Excluir</a>
					</td>
				</tr>";
                        }
                        ?>            
                    </tr>
                </tbody>
            </table>
        </div>

    </div> <!-- /#list -->

    <div id="bottom" class="row">
        <div class="col-md-12">
            <ul class="pagination">
                <li class="disabled"><a>&lt; Anterior</a></li>
                <li class="disabled"><a>1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li class="next"><a href="#" rel="next">Próximo &gt;</a></li>
            </ul><!-- /.pagination -->
        </div>
    </div> <!-- /#bottom -->
</div> <!-- /#main -->

<!-- Modal -->
<div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
            </div>
            <div class="modal-body">
                Deseja realmente excluir este item?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Sim</button>
                <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
            </div>
        </div>
    </div>
</div>
