<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoadReport extends CI_Controller {

		function __construct()
    {
        parent::__construct();
        $this->load->model('Front_model');    
    }
	public function index()
	{
		$data['reportdb'] = $this->Front_model->allreport();
		$data['consignee'] = $this->Front_model->allcons();
		$data['shipper'] = $this->Front_model->allshipper();
		$this->load->view('Report/index', $data);
	}

	public function postShipper()
	{
		$data = array(
			'shipper_name' => $this->input->post('name'),
			'shipper_address' => $this->input->post('address'),
			'shipper_contact' => $this->input->post('contact'),			
		);
		$sukses = $this->db->insert('tb_shipper', $data);
		if($sukses)
		{
			redirect('LoadReport');
		}else{
			redirect('LoadReport');
		}
	}
	public function postConsignee()
	{
		$data = array(
			'cons_name' => $this->input->post('name'),
			'cons_address' => $this->input->post('address'),
			'cons_contact' => $this->input->post('contact'),			
		);
		$sukses = $this->db->insert('tb_consignee', $data);
		if($sukses)
		{
			redirect('LoadReport');
		}else{
			redirect('LoadReport');
		}
	}

	public function postReport()
	{
		$data = array(
			'load_id' => $this->input->post('id'),
			'shipper_id' => $this->input->post('shipper'),
			'cons_id' => $this->input->post('cons'),
			'load_vessel' => $this->input->post('vessel'),
			'load_carrier' => $this->input->post('carrier'),
			'load_vol' => $this->input->post('vol'),
			'load_pol' => $this->input->post('pol'),
			'load_dest' => $this->input->post('dest'),
			'load_etd' => date("Y-m-d",strtotime($this->input->post('etd'))),
			'load_eta' => date("Y-m-d",strtotime($this->input->post('eta'))),
			'load_hbl' => $this->input->post('hbl'),
			'load_mbl' => $this->input->post('mbl'),
			
		);
		$sukses = $this->db->insert('tb_loadreport', $data);
		if($sukses)
		{
			redirect('LoadReport');
		}else{
			redirect('LoadReport');
		}
	}
	public function Generate($id){
		$data['reportdet'] = $this->Front_model->reportbyid($id);
		$this->load->view('reportview',$data);
	}
	public function deleteReport($id)
	{
		$this->db->where('load_id', $id);
		$sukses = $this->db->delete('tb_loadreport');
		if($sukses)
		{
			redirect('LoadReport');
		}else{
			redirect('LoadReport');
		}
	}
}
