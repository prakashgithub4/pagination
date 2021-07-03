<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	public function index()
	{
		$page_size = 5;
		$total_records = $this->db->get('posts')->num_rows();
		/** calculate number of pages */
		$number_of_pages = ceil($total_records/$page_size);
		if(empty($_GET['page'])){
			 $page = 1;
	    }else{
		   $page =$_GET['page'];
		}
		$data['number_of_page']= $number_of_pages;
		$first_page = ($page-1)*$page_size;
		$data['posts']=$this->db->select("*")->from('posts')->limit($page_size,$first_page)->get()->result();
	    
	   
	 
		
		$this->load->view('welcome_message',$data);
	}
}
