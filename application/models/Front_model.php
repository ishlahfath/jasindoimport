<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
//require APPPATH . 'libraries/REST_Controller.php';
class Front_model extends CI_Model {
   function allreport(){
    $this->db->join('tb_shipper', 'tb_shipper.shipper_id = tb_loadreport.shipper_id');
    $this->db->join('tb_consignee', 'tb_consignee.cons_id = tb_loadreport.cons_id');
    $this->db->order_by('tb_loadreport.load_id', 'DESC');
    return $this->db->get('tb_loadreport')->result();
   }
    function reportbyid($id){
    $this->db->join('tb_shipper', 'tb_shipper.shipper_id = tb_loadreport.shipper_id');
    $this->db->join('tb_consignee', 'tb_consignee.cons_id = tb_loadreport.cons_id');
    return $this->db->get_where('tb_loadreport', ['load_id' => $id])->row();
   }
   function allcons(){
   	     return $this->db->get('tb_consignee')->result();
   }
   function allshipper(){
   	     return $this->db->get('tb_shipper')->result();
   }





}