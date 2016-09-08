<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Categoria
 *
 * @author Daniel
 */
class Categoria extends Model{
    protected $tabela = 'categorias';
    public function __construct() {
        parent::__construct();
        
    }
}
