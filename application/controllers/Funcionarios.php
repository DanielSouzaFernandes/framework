<?php

class Funcionarios extends Controller{

	  function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $funcionario = new Funcionario();
        $funcionario->get();
        $this->data = $funcionario->all_to_array();
        $this->render('funcionarios/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('funcionarios/add');
    }

    public function delete($param = '') {
        $funcionario= new Funcionario();
        $funcionario->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $funcionario = new Funcionario();
        $funcionario->getById($param);
        $this->data = $funcionario->to_array();
        $this->render('funcionarios/view_simple');
    }

    public function edt_simple($param = '') {
        $funcionario= new Funcionario();
        $funcionario->getById($param);
        $this->data = $funcionario->to_array();
        $this->render('funcionarios/edt_simple');
    }

    public function salvar() {
        $funcionario = $this->post_to_obj(array('nome','entrada','telefone','cargo_id','endereco_id'), new Funcionario());
        $funcionario->save();
        $this->index();
    }

    public function atualizar() {
        $funcionario= $this->post_to_obj(array('id','nome','entrada','telefone','cargo_id','endereco_id'), new Funcionario());
        $funcionario->update();
        $this->index();
    }

}

?>