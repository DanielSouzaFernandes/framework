<?php

class Produtos extends Controller{

	function __construct(){
		parent::__construct();
                $this->load->native_helper('URLHelper');
	}

	public function index(){

            $this->render('produtos/index');
	}

        public function add(){
            //função que carrega a view
            $this->render('produtos/add');
        }
        public function edit(){
            $this->render('produtos/edit');
        }
        public function delete(){

        }
}

?>