<?php

	/**
	* 
	*/
	class Auth_model extends CI_model
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}

		function select_by_param($username,$password){
			
		}
	}
?>