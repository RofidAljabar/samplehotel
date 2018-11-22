<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index(){
		if ($this->session->userdata('admin_session') == '') {
			$this->load->view('pages/login');
		} else {
			redirect('home');
		}
	}

	public function proseslogin(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$curl_handle = curl_init();
		//curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.0.5/kurirsmiserver/user_controller/login/format/json');
		curl_setopt($curl_handle, CURLOPT_URL, 'http://192.168.2.179:8080/samplehotelserver/user_controller/login/format/json');
		curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl_handle, CURLOPT_POST, 1);
		curl_setopt($curl_handle, CURLOPT_POSTFIELDS, array(
				'username' => $username,
				'password' => $password
			));

		$buffer = curl_exec($curl_handle);
		curl_close($curl_handle);

		$result = json_decode($buffer, true);

		//print_r($result);

		if ($result['login']['status'] == "success") {
			$username_login = $result['login']['data']['email'];
			$nama_login = $result['login']['data']['full_name'];

			$this->session->set_userdata('admin_session',$username_login);
			$this->session->set_userdata('name_session',$nama_login);

			redirect('home');
		} else {
			$this->session->set_flashdata('error',"Login Failed. Please check your username and password again.");
			redirect('login');
		}

		// $role_login = $result['role_user'];
		// $username_login = $result['username_user'];

		// if ($role_login == 'Admin') {
		// 	$this->session->set_userdata('admin_session',$username_login);
		// 	$this->session->set_userdata('role_session',$role_login);

		// 	redirect('home');

		// } elseif ($role_login == 'Kurir') {
		// 	$this->session->set_flashdata('error',"Login Failed. You don't have permission.");
		// 	redirect('login');

		// } else {
		// 	$this->session->set_flashdata('error',"Login Failed. Please check your username and password again.");
		// 	redirect('login');
		// }
	}

	public function get_userlogout(){
		$this->session->unset_userdata('admin_session');
		$this->session->unset_userdata('name_session');

		session_destroy();
		redirect('login');
	}


}
