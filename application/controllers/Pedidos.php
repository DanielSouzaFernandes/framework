<?php

class Pedidos extends Controller{

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $pedido = new Pedido();
        $pedido->get();
        $this->data = $pedido->all_to_array();
        $this->render('pedidos/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('pedidos/add');
    }

    public function delete($param = '') {
        $pedido = new Pedido();
        $pedido->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $pedido = new Pedido();
        $pedido->getById($param);
        $this->data = $pedido->to_array();
        $this->render('pedidos/view_simple');
    }

    public function edt_simple($param = '') {
        $pedido = new Pedido();
        $pedido->getById($param);
        $this->data = $pedido->to_array();
        $this->render('pedidos/edt_simple');
    }

    public function salvar() {
        
        $pedido = $this->post_to_obj(array('funcionario_id','cliente_id','data_cadastro'), new Pedido());
        $pedido->save();
        $this->index();
    }

    public function atualizar() {
        $pedido = $this->post_to_obj(array('id','funcionario_id','cliente_id','data_cadastro'), new Pedido());
        $pedido->update();
        $this->index();
    }
}

?>