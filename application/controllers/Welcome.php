<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('login');
	}

	public function postLogin()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->get_where('tb_admin', ['username' => $username, 'password' => md5($password)]);
		if($query->num_rows() > 0)
		{
			$dataAdmin = $query->row();
			$data = array(
				'id' => $dataAdmin->id,
				'username' => $dataAdmin->username
			);
			$this->session->set_userdata($data);
			redirect('LoadReport');
		}else{
			$this->session->set_flashdata('error', 'Incorrect Username and Password');
			redirect('Welcome');
		}
	}

	public function postLogout()
	{
		$this->session->sess_destroy();
		redirect('Welcome');
	}
}
