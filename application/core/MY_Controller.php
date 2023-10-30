<?php

if (!defined('BASEPATH'))
{
	exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller {

	public $data = array();

	function __construct()
	{
		parent::__construct();
		$this->load->library('ion_auth');
		//$this->load->model('User_model');
		$this->data['app_title'] = $this->config->item('title');
		$this->data['base_url'] = base_url();
		$this->data['server'] = 'http://' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'] . '/';
		$this->data['uri_string'] = uri_string();
		// if logged in
		if ($this->ion_auth->logged_in())
		{
			$users = $this->ion_auth->user()->row();
            $usergroups = $this->ion_auth->get_users_groups($users->id)->row();
            $user  =  (object) array_merge((array)$users, (array)$usergroups);
            
			log_message('info', 'Logged in as: ' . $user->username);
			$this->data['fname'] = $user->username;
			$this->data['username'] = $user->username;
            
            $this->data['user'] = $user;
           // print_r($this->data['user']);
			$this->data['logged_in'] = TRUE;
			// $this->data['my_groups'] = $this->User_model->groups($user->id);
			$groups = $this->ion_auth->get_users_groups()->result_array();
			//$groups = array_column($groups, 'name');
			$this->data['my_groups'] = $user->username;
            $this->data['user_company'] = $user->company;
            //$this->data['com_id'] = $user->com_id;
            $this->data['check_group_name'] = $usergroups->name;
            $this->data['userIp'] = $user->ip_address;
           
            //$logUserLocation =  json_decode(file_get_contents('https://ipapi.co/'.$user->ip_address.'/json'));
         //var_dump($logUserLocation);
		}else{
		   // $this->data['user'] = $this->ion_auth->user()->row();
		}
	}

}

// End of My controller
