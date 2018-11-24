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
	   $data['suppliers']=$this->db_model->getSuppliersData();
	   $this->load->view('home',$data);
	   $this->load->view('footer');
	}

	
	    //add_supplier
	public function add_supplier($var)
    {
        $agent= substr($var, 10);
        $data['id']=$agent;
        $data['supplier']=$this->db_model->getSuppliersDetails($agent);
        $this->load->view('header');
        $this->load->view('add_supplier',$data);
        $this->load->view('footer');
    }
	
    public function edit_supplier($var)
    {  //edit supplier details
        $agent= substr($var, 10);
        $data['id']=$agent;
        $data['supplier']=$this->db_model->getSuppliersDetails($agent);
        $this->load->view('header');
        $this->load->view('edit_supplier',$data);
        $this->load->view('footer');
		
     
    }
	
	public function assign_seats()
    { 
     	//assign seats for the customers      
        $data['seats']=$this->db_model->get_seat_details();
        $this->load->view('header');
        $this->load->view('assign_seats',$data);
        $this->load->view('footer');     
    }
	
	   public function supplier_detail($var)
    { 
	//add_supplier
        $agent= substr($var, 10);
        $data['id']=$agent;
        $data['supDetail']=$this->db_model->getSupplierDetails($agent);
        $data['supplier']=$this->db_model->getSuppliersDetails($agent);
        $this->load->view('header');
        $this->load->view('supplier_detail',$data);
        $this->load->view('footer');
	}
	//modific articolo
	public function modific_articolo($var)
	{
	   $agent= substr($var, 10);
       $data['id']=$agent;
	   $session_user = $this->session->userdata('session_user');
	   $this->load->view('header');
	   $data['article']=$this->db_model->getSupplierDetails($agent);
	   $this->load->view('modific_articolo',$data);
	   $this->load->view('footer');
	}
	
	public function modific_articolo_temp($var)
	{
	   $agent= substr($var, 10);
       $data['id']=$agent;
	   $session_user = $this->session->userdata('session_user');
	   $this->load->view('header');
	   $data['details']=$this->db_model->getallDetails($agent);
	   $this->load->view('modific_articolo_temp',$data);
	   $this->load->view('footer');
	}

	
	
 }
