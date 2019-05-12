<?php

class Example_module extends MX_Controller {
	public function index($param="1") { 

		$data['_view'] = 'module_view';
		$data['data'] = array("test"=>'data');

		echo $this->load->view('layouts/main', $data);
	}
}
