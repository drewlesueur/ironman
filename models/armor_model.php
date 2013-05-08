<?php

class armor_model extends CI_Model {

    function __construct() {
        parent::__construct();
    }
    
    function getAll() {

        return $this->db->select('
            id,
            title,
            info,
            big_info
        ')->
        from('armor')->
        get()->result_array();
    }

    function get($id) {

        $data=$this->db->select('
            id,
            title,
            info,
            big_info
        ')->
        from('armor')->
        where('id',$id)->
        get()->result_array();
        
        return $data[0];
        
    }
    
}

?>
