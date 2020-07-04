<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Menu extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('Menu_model', 'menu');
		is_logged_in();
	}
	public function index()
	{
		$data['title'] = 'Manajemen Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] =  $this->db->get('menu_user')->result_array();

		$this->form_validation->set_rules('menu', 'Menu', 'required');
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header', $data);
			$this->load->view('templates/user_sidebar', $data);
			$this->load->view('templates/user_topbar', $data);
			$this->load->view('menu/index', $data);
			$this->load->view('templates/user_footer', $data);
		} else {
			$this->db->insert('menu_user', ['menu' => $this->input->post('menu')]);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil Mendaftarkan Menu !!!
		  </div>');
			redirect('menu');
		}
	}
	public function submenu()
	{
		$data['title'] = 'Sub Manajemen Menu';
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$data['menu'] =  $this->db->get('menu_user')->result_array();
		$data['subMenu'] =  $this->menu->getSubMenu();
		$this->form_validation->set_rules('title', 'Sub Menu', 'required');
		$this->form_validation->set_rules('menu_id', 'Menu', 'required');
		$this->form_validation->set_rules('url', 'Url', 'required');
		$this->form_validation->set_rules('icon', 'Ikon', 'required');

		if ($this->form_validation->run() == false) {
			$this->load->view('templates/user_header', $data);
			$this->load->view('templates/user_sidebar', $data);
			$this->load->view('templates/user_topbar', $data);
			$this->load->view('menu/submenu', $data);
			$this->load->view('templates/user_footer', $data);
		} else {
			$data = [
				'title' => $this->input->post('title'),
				'menu_id' => $this->input->post('menu_id'),
				'url' => $this->input->post('url'),
				'icon' => $this->input->post('icon'),
				'is_active' => $this->input->post('is_active')

			];
			$this->db->insert('sub_menu_user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
			Berhasil Mendaftarkan Sub Menu !!!
		  </div>');
			redirect('menu/submenu');
		}
	}
}
