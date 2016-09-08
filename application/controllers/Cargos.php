<?php

class Cargos extends Controller {

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $cargo = new Cargo();
        $cargo->get();
        $this->data = $cargo->all_to_array();
        $this->render('cargos/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('cargos/add');
    }

    public function delete($param = '') {
        $cargo = new Cargo();
        $cargo->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $cargo = new cargo();
        $cargo->getById($param);
        $this->data = $cargo->to_array();
        $this->render('cargos/view_simple');
    }

    public function edt_simple($param = '') {
        $cargo = new cargo();
        $cargo->getById($param);
        $this->data = $cargo->to_array();

        $this->render('cargos/edt_simple');
    }

    public function salvar() {
        $cargo = $this->post_to_obj(array('descricao', 'salario'), new Cargo());
        $cargo->save();
        $this->index();
    }

    public function atualizar() {
        $cargo = $this->post_to_obj(array('id', 'descricao', 'salario'), new Cargo());
        $cargo->update();
        $this->index();
    }

}

?>