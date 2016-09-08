<?php

class Enderecos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

    public function index() {
        $endereco = new Endereco();
        $endereco ->get();
        $this->data = $endereco->all_to_array();
        $this->render('enderecos/index');
    }

    public function add() {
        //função que carrega a view
        $this->render('enderecos/add');
    }

    public function delete($param = '') {
        $endereco= new Endereco();
        $endereco->deleteById($param);
        $this->index();
    }

    public function view_simple($param = '') {
        $endereco= new Endereco();
        $endereco->getById($param);
        $this->data = $endereco->to_array();
        $this->render('enderecos/view_simple');
    }

    public function edt_simple($param = '') {
        $endereco= new Endereco();
        $endereco->getById($param);
        $this->data = $endereco->to_array();

        $this->render('enderecos/edt_simple');
    }

    public function salvar() {
        $endereco= $this->post_to_obj(array('cep','logradouro','bairro','cidade','estado'), new Endereco());
        $endereco->save();
        $this->index();
    }

    public function atualizar() {
        $endereco= $this->post_to_obj(array('id','cep','logradouro','bairro','cidade','estado'), new Endereco());
        $endereco->update();
        $this->index();
    }

}

?>