<?php

class UserAuthentication extends CI_Controller { // Previously known as "Authstep"
	
	protected $metadata;
	
	public function __construct() 
	{
        parent::__construct();
        
   //      if ( $this->ion_auth->logged_in() ) 
   //      {
   //      	//global $metadata;
   //      	$var = $this->base_model->open_box();
			// if (!$var)
			// {
			// 	redirect( base_url("startup/setup") );
			// }
			// $metadata = $this->session->userdata("sitedata");
   //      	$controller = $this->uri->segment(2);
   //      	$this->session->set_userdata("widget",$controller);
   //      }
   //      else 
   //      {
   //      	redirect(base_url() . 'auth/');
   //      }
    }
    
    public function allow_access($array = "")
    {
    	$user = $this->ion_auth->user();
    	if ($this->ion_auth->in_group($array))
    	{
    		//Do Nothing allow access
    	}
    	else
    	{
    		$this->session->set_flashdata("pd","hello");
    		$this->session->set_userdata("callback_url",$_SERVER['REQUEST_URI']);
    		redirect( base_url("permission-denied") );
    	}
    }
}

class OpenBox extends CI_Controller { // Check if Setup has been made
	
	protected $sd;
	
	public function __construct() 
	{
        parent::__construct();
        
        $var = $this->base_model->check_owner();
		if (!$var)
		{
			redirect( base_url("startup/setup") );
		}
		
		$controller = $this->uri->segment(1);
		$this->session->set_userdata("widget",$controller);
    }
}








