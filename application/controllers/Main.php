<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct(){
		parent:: __construct();
		$this->load->helper('form');
	}

	public function index()
	{
		$this->load->view('index');
	}

	public function opportunities()
	{
		$this->load->view('opportunities');
	}

	public function about()
	{
		$this->load->view('about');
	}

	public function testimonials()
	{
		$this->load->view('testimonials');
	}

	public function products()
	{
		$this->load->view('products');
	}

	public function contact()
	{
		$this->load->view('contact');
	}

	public function signin()
	{
		$this->load->view('signin');
	}

	public function register()
	{
		$this->load->view('register');
	}

	public function p1()
	{
		$this->load->view('beauty');
	}

	public function p2()
	{
		$this->load->view('coffee');
	}

	public function p3()
	{
		$this->load->view('supplements');
	}

	public function p4()
	{
		$this->load->view('perfumes');
	}

}