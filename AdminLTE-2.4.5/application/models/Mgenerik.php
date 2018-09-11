<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Mgenerik extends CI_Model
{
    function __construct()
    {
	parent::__construct();
        $this->load->library('DatabaseHelperBAP');
        $this->databasehelperbap->registerTable("*");
    }
    
    function select($select, $fromtable, $where = array(), $limit = null, $offset = null)
    {
        return $this->dropdownhelperbap->get_selectfrom($select, $fromtable, $where, $limit, $offset);
    }
}
