<?php

class Itens extends Controller {

        function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $item = new Item();
        $item->get();
        $this->data = $item->all_to_array();
        $this->render('itens/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('itens/add');
    }

    public function delete($param = '') {
        $item = new Item();
        $item->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $item = new Item();
        $item->getById($param);
        $this->data = $item->to_array();
        $this->render('itens/view_simple');
    }

    public function edt_simple($param = '') {
        $item = new Item();
        $item->getById($param);
        $this->data = $item->to_array();
        $this->render('itens/edt_simple');
    }

    public function salvar() {
        $item = $this->post_to_obj(array('pedido_id', 'produto_id', 'valor_unitario', 'quantidade', 'valor_total'), new Item());
        $item->save();
        $this->index();
    }

    public function atualizar() {
        $item = $this->post_to_obj(array('id','pedido_id', 'produto_id', 'valor_unitario', 'quantidade', 'valor_total'), new Item());
        $item->update();
        $this->index();
    }

}

?>