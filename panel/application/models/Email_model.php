<?php

class Email_model extends CI_Model {

    public $tableName = "email";

    public function add($data = array()){

        return $this->db->insert($this->tableName,$data);

    }

}


