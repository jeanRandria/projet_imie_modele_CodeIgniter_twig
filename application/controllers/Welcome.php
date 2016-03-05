<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->library('twig');
		$data['nom']='Jean';
		$this->twig->display('welcome_message',array('nom' => 'Jean Doe'));
		//$this->load->view('welcome_message');
	}
}
