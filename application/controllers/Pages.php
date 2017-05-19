<?php
defined('BASEPATH') OR exit('No direct script access allowed');
///index.php/pages/view
class Pages extends CI_Controller {

	public function view($page='home')
	{
		if(!file_exists('views/pages/'.$page.'.php'))
		{
			show_404();
		}
		
		$this->load->view('pages/'.$page);
		
	}
}
