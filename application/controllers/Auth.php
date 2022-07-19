<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	// LOGIN

	public function login()
	{
		$this->load->view('auth/login');
	}

	// REGISTER

	public function register()
	{
		$this->load->view('auth/register');
	}

	public function act_register()
	{
		$name = $this->input->post('name', TRUE);
		$name1 = $this->input->post('name1', TRUE);
		$country = $this->input->post('country', TRUE);
		$phone = $this->input->post('phone', TRUE);
		$email = $this->input->post('email', TRUE);
		$company = $this->input->post('company', TRUE);
		$department = $this->input->post('department', TRUE);
		$role = $this->input->post('role', TRUE);

		$user = $this->db->get_where('user', ['email', $email])->row();

		if (!$user) {
			$data = [
				'name' => $name,
				'name1' => $name1,
				'country' => $country,
				'phone' => $phone,
				'email' => $email,
				'company' => $company,
				'department' => $department,
				'role' => $role
			];
			$this->db->insert('user', $data);

			$session_user = [
				'id' => $this->db->insert_id(),
				'name' => $name
			];
			$this->session->set_userdata($session_user);

			$this->session->set_flashdata('alert', '<div class="alert alert-success"> <span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>You have succesfully registered '. $user->name .'.</div>');
			redirect('auth/register');
		}

		$this->session->set_flashdata('alert', '<div class="alert alert-danger"><span class="closebtn" onclick="this.parentElement.style.display=\'none\';">&times;</span>Email sudah terdaftar!</div>');
		redirect('home');
	}
}
