<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class suppliers extends CI_Controller {

  public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
		        $this->load->helper('url');
        $this->load->model('db_model');
    }

	//to load the home page of the system
	//per caricare la pagina iniziale del sistema
	public function index()
	{
	 $session_user = $this->session->userdata('session_user');
	  $this->load->view('header');
	  $data['suppliers']=$this->db_model->getSupplierData();
	 
	  $this->load->view('home',$data);
	  $this->load->view('footer');
	}

	   public function add_supplier($var)
    { 

	//add_supplier
        $agent= substr($var, 10);
        $data['id']=$agent;
        $data['supplier']=$this->db_model->getSupplierDetails($agent);

        $this->load->view('header');
        $this->load->view('add_supplier',$data);
        $this->load->view('footer');
		
     
    }
	
		}
