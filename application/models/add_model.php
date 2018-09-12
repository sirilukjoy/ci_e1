<?php
class add_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function getRows($table)
    {
        $rs=$this->db->get($table);
        return $rs->num_rows();
    }
}



?>