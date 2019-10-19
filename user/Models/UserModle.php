<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserModle
 *
 * @author ServerLand
 */
class UserModle extends Model{

    function __construct() {
        parent::__construct();
    }
    
    public function fetchAllAssoc($sql,$blinddata=null){
        $sth= $this->connect()->prepare($sql);
        $sth->execute($blinddata);
        return TRUE;
    }
        public function getData($id="2",$pass="james"){
        $stm= $this->connect()->fetchAllAssoc("SELECT id,pass FROM user_tb Where id=".$id AND "pass=".$pass);
        return $stm;
    }
 
}
