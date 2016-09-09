<?php

class Usuarios extends Controller{

    function __construct() {
        parent::__construct();
        $this->load->native_helper('URLHelper');
    }

    public function index() {
        $usuario = new Usuario();
        $usuario->get();
        $this->data = $usuario->all_to_array();
        $this->render('usuarios/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('usuarios/add');
    }

    public function delete($param = '') {
        $usuario = new Usuario();
        $usuario->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $usuario = new Usuario();
        $usuario->getById($param);
        $this->data = $usuario->to_array();
        $this->render('usuarios/view_simple');
    }

    public function edt_simple($param = '') {
        $usuario = new Usuario();
        $usuario->getById($param);
        $this->data = $usuario->to_array();
        $this->render('usuarios/edt_simple');
    }

    public function salvar() {
        $usuario = $this->post_to_obj(array(''), new Usuario());
        $usuario->save();
        $this->index();
    }

    public function atualizar() {
        $usuario = $this->post_to_obj(array(''), new Usuario());
        $usuario->update();
        $this->index();
    }
}

?>