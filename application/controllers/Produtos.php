<?php

class Produtos extends Controller{

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $produto = new Produto();
        $produto->get();
        $this->data = $produto->all_to_array();
        $this->render('produtos/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('produtos/add');
    }

    public function delete($param = '') {
        $produto = new Produto();
        $produto->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $produto = new Produto();
        $produto->getById($param);
        $this->data = $produto->to_array();
        $this->render('produtos/view_simple');
    }

    public function edt_simple($param = '') {
        $produto = new Produto();
        $produto->getById($param);
        $this->data = $produto->to_array();

        $this->render('produtos/edt_simple');
    }

    public function salvar() {
        $produto = $this->post_to_obj(array('descricao', 'fornecedor_id','categoria_id', 'quantidade', 'valor'), new Produto());
        $produto->save();
        $this->index();
    }

    public function atualizar() {
        $produto = $this->post_to_obj(array('id','descricao','fornecedor_id','categoria_id','quantidade','valor'), new Produto());
        $produto->update();
        $this->index();
    }
}

?>