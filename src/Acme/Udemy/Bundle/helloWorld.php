<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace Acme\Udemy\Bundle;

/**
 * Description of helloWorld
 *
 * @author Massy
 */
class helloWorld {
    private $logger;
    private $nome;
    //put your code here
    public function __construct($logger, $nome) {
        $this->logger = $logger;
        $this->nome = $nome;
    }
    public function saluta($saluta) {
        $this->logger->error($this->nome);
     echo $saluta;   
    }
}
