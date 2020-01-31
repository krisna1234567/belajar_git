<?php
class Mbukutamu extends CI_model{
    function tampil_data(){
        return $this->db->get('tbl_bukutamu');
    }

    function proses_tambahdata($data, $table){
        return $this->db->insert($table, $data);
    }

    function delete_data($where, $table){
        $this->db->where($where);
        $this->db->delete($table);
    }

    function edit_data($where,$table){
        return $this->db->get_where($table, $where);
    }
    function query_update($where, $data, $table){
        $this->db->where($where);
        $this->db->update($table, $data);

    }
}
?>