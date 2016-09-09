<?php
	
	/**
	* 
	*/
	class Auth extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Auth_model');
		}

		function index(){
			$data['msg'] = $this->input->get('msg');
			$data['action'] = 'Auth/chk_in';
			if($this->chk_sess()==1){

			}else{
				$this->load->view('login_page',$data);
			}
		}
		
		function chk_sess(){
			if($this->session->userdata('Log_in')){
				return 1;
			}else{
				return 0;
			}
		}

		function chk_in(){
			$username = $this->input->post('username');
			$password = $this->input->post('password');


		}

		function chk_out(){

		}
	}

?>