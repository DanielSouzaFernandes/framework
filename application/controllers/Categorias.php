<?php

class Categorias extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $categoria = new Categoria();
        $categoria->get();
        $this->data = $categoria->all_to_array();
        $this->render('categorias/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('categorias/add');
    }

    public function delete($param = '') {
        $categoria = new Categoria();
        $categoria->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $categoria = new Categoria();
        $categoria->getById($param);
        $this->data = $categoria->to_array();
        $this->render('categorias/view_simple');
    }

    public function edt_simple($param = '') {
        $categoria = new Categoria();
        $categoria->getById($param);
        $this->data = $categoria->to_array();

        $this->render('categorias/edt_simple');
    }

    public function salvar() {
        $categoria = $this->post_to_obj(array('nome'), new Categoria());
        $categoria->save();
        $this->index();
    }

    public function atualizar() {
        $categoria = $this->post_to_obj(array('id', 'nome'), new Categoria());
        $categoria->update();
        $this->index();
    }

}

?>