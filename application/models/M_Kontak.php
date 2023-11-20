<?php
    class M_Kontak extends CI_Model
    {
        function fetch_all()
        {
            $this->db->order_by('id', 'DESC');

            $query = $this->db->get('telepon');

            return $query->result_array();
        }

        function fetch_single_data($id)
        {
            $this->db->where("id", $id);
            $query = $this->db->get('telepon');
                
            return $query->row();
        }        
    }
?>