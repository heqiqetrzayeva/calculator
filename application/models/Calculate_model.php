<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Calculate_model extends CI_Model {

    public function InsertNum($data)
    {
        return $this->db->insert('calculator',$data);
    }
}
