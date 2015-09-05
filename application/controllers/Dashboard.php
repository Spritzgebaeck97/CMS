<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends UserAuthentication {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
    }
	
	public function index()
	{
		echo "Yay";
	}
}
