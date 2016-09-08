<?php

class Clientes extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cliente = new Cliente();
        $cliente->get();
        $this->data = $cliente->all_to_array();
        $this->render('clientes/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('clientes/add');
    }

    public function delete($param = '') {
        $cliente = new Categoria();
        $cliente->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $cliente = new Cliente();
        $cliente->getById($param);
        $this->data = $cliente->to_array();
        $this->render('clientes/view_simple');
    }

    public function edt_simple($param = '') {
        $cliente = new Cliente();
        $cliente->getById($param);
        $this->data = $cliente->to_array();

        $this->render('clientes/edt_simple');
    }

    public function salvar() {
        
        $cliente = $this->post_to_obj(array('nome','cpf','telefone','renda','data_cadastro','endereco_id'), new Cliente());
        $cliente->save();
        $this->index();
    }

    public function atualizar() {
        $cliente = $this->post_to_obj(array('id','nome','cpf','telefone','renda','data_cadastro','endereco_id'), new Cliente());
        $cliente->update();
        $this->index();
    }

}

?>