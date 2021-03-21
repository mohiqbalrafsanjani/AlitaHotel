<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model{
    

    //fungsi untuk panggil isi tabel
    public function Get($table){
        $res = $this->db->get($table);
        return $res->result_array();
    }

    //fungsi untuk panggil isi tabel dengan spesifik id
    public function GetWhere($table, $data){
        $res = $this->db->get_where($table, $data);
        return $res->result_array();
    }

    //fungsi untuk simpan ke DB
    public function Insert($table, $data){
        $res = $this->db->insert($table, $data);
        return $res;
    }
    
}
?>