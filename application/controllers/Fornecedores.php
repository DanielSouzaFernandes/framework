<?php

class Fornecedores extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $fornecedor = new Fornecedor();
        $fornecedor->get();
        $this->data = $fornecedor->all_to_array();
        $this->render('fornecedores/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('fornecedores/add');
    }

    public function delete($param = '') {
        $fornecedor = new Fornecedor();
        $fornecedor->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $fornecedor = new Fornecedor();
        $fornecedor->getById($param);
        $this->data = $fornecedor->to_array();
        $this->render('fornecedores/view_simple');
    }

    public function edt_simple($param = '') {
        $fornecedor = new Fornecedor();
        $fornecedor->getById($param);
        $this->data = $fornecedor->to_array();
        $this->render('fornecedores/edt_simple');
    }

    public function salvar() {
        $fornecedor = $this->post_to_obj(array('nome','cnpj','telefone','endereco_id'), new Fornecedor());
        $fornecedor->save();
        $this->index();
    }

    public function atualizar() {
        $fornecedor = $this->post_to_obj(array('id','nome','cnpj','telefone','endereco_id'), new Fornecedor());
        $fornecedor->update();
        $this->index();
    }

}

?>