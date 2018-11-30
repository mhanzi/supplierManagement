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
	   $this->load->view('home');
	   $this->load->view('footer');
	}
    
	public function getallsuppliers(){
		$query = $this->input->post('query');
		$suppliers=$this->db_model->getSuppliersData($query);
		echo '
		<table class="table table-bordered" >
		   <thead>
			  <tr>
				 <th id="rcornerl">Name</th>
				 <th>Marchio</th>
				 <th>Descrizione</th>
				 <th>Inizio fornitura</th>
				 <th>Fine fornitura</th>
				 <th>Partita IVA</th>
				 <th>Tipologia</th>
				 <th>Stato</th>
				 <th id="rcornerr">Azioni</th>
			  </tr>
		   </thead>
		   <tbody>
			  ';
			 
			 if(isset($suppliers) && $suppliers!= 0){
			  foreach ($suppliers as $sup) { 
			  echo '
			  <tr>
				 <td>'.$sup['tbl_supplier_name'].'</td>
				 <td align="center">';
					$get_img = $this->db_model->get_images($sup['marchio']);
					if ($get_img[0]['file_name'] == 'noimage.png') {
					}else{
					echo '<img src="'.base_url()."/uploads/brands/".$get_img[0]['file_name'].'" class="img-responsive img-rounded" alt="'.$sup['tbl_supplier_name'].'" style="width:142px;height:auto;">';
					}
					echo '
				 </td>
				 <td>'.$sup['descrizione'].'</td>
				 <td>'. $sup['inizio_fornitura'].'</td>
				 <td>'. $sup['fine_fornitura'].'</td>
				 <td>'.$sup['partita_IVA'].'</td>
				 <td>'.$sup['tipologia'].'</td>
				 <td>'.$sup['stato'].'</td>
				 ';
				 $length = 10;
				 $randomString = substr(str_shuffle("0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, $length); 		
				 echo '
				 <td>
					<button type="button" name="'.$sup["tbl_sup_id"].'" id="viewButton'.$sup['tbl_sup_id'].'"  class="btn" onclick="viewButtonList(this.name)"> Azioni Articolo </button></br>
					<div id="idList'.$sup['tbl_sup_id'].'" style="display:none">';
					   echo '<a href="'.site_url('suppliers/supplier_detail/'.$randomString.$sup['tbl_sup_id']).'"><span class="fa fa-file-text-o" style="font-size:12px" aria-hidden="true"> &nbsp;&nbsp; Dettagli </span></a>  </br>
					   <a href="'.site_url('suppliers/edit_supplier/'.$randomString.$sup['tbl_sup_id']).'"><span class="fa fa-edit" style="font-size:12px" aria-hidden="true">&nbsp;&nbsp;  Modifica </span></a>  </br>
					   <a href="'.site_url('suppliers/aggiungi_fornitore/'.$randomString.$sup['tbl_sup_id']).'"><span class="fa fa-copy"  style="font-size:12px" aria-hidden="true"> &nbsp;&nbsp; Articoli </span></a>  </br>';
					   echo '<span class="fa fa-language" style="font-size:14px" aria-hidden="true"> &nbsp;&nbsp; Traduci </span>  </br>
					   <span class="fa fa-eye" style="font-size:14px" aria-hidden="true">&nbsp;&nbsp;  Mostra/Nascondi </span>  </br>
					   <span class="fa fa-globe" style="font-size:14px" aria-hidden="true">&nbsp;&nbsp;  Pubblica </span>
					</div>
				 </td>
			  </tr>
			  ';
			  }  }else{
			  echo '<tr><td colspan="9">No results found</td><tr>';
			  }

		   echo '</tbody>
		</table>
		';
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
	
	public function assegna_posti()
    { 
     	//assign seats for the customers      
        $data['seats']=$this->db_model->get_seat_details(1);
        $this->load->view('header');
        $this->load->view('assign_seats',$data);
        $this->load->view('footer');     
    }
		public function assegna_posti_more()
    { 
     	//assign seats for the customers      
        $data['seats']=$this->db_model->get_seat_details(2);
        $this->load->view('header');
        $this->load->view('assegna_posti',$data);
        $this->load->view('footer');     
    }
	
		public function assegna_postio()
    { 
     	//assign seats for the customers      
        $data['seats']=$this->db_model->get_seat_details(3);
        $this->load->view('header');
        $this->load->view('assegna_postio',$data);
        $this->load->view('footer');     
    }
	
	public function aggiungi_fornitore($var){
	    $agent= substr($var, 10);
        $data['id']=$agent;
        $data['supDetail']=$this->db_model->getSupplierDetails($agent);
        $data['supplier']=$this->db_model->getSuppliersDetails($agent);
        $this->load->view('header');
        $this->load->view('aggiungi_fornitore',$data);
        $this->load->view('footer');     
	
	}
	public function lista_tratte(){
	    
       // no idea about the table which should connect
        $this->load->view('header');
        $this->load->view('lista_tratte');
        $this->load->view('footer');     
	
	}
	
	public function filter_articles(){
	// no idea about the table which should connect
	    $this->load->view('header');
        $this->load->view('filter_articles');
        $this->load->view('footer');     
	
	}
	
	public function gestione_tratta(){
	// no idea about the table which should connect page 14
	    $this->load->view('header');
        $this->load->view('gestione_tratta');
        $this->load->view('footer'); 
	
	
	}
	
	public function lista_partecipanti(){
	// no idea about the table which should connect page 15
	    $this->load->view('header');
        $this->load->view('lista_partecipanti');
        $this->load->view('footer'); 	
	}
	
	public function supplier_detail($var)
    { 
	//supplier details
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
	
	public function modific_articolo_template($var)
	{
	   $agent= substr($var, 10);
       $data['id']=$agent;
	   $session_user = $this->session->userdata('session_user');
	   $this->load->view('header');
	   $data['details']=$this->db_model->getallDetails($agent);
	   $this->load->view('modific_articolo_template',$data);
	   $this->load->view('footer');
	}
public function evento_tratta()
	{
	   $session_user = $this->session->userdata('session_user');
	   $this->load->view('header');
	   $data['details']=$this->db_model->getalluserDetails();
	   $this->load->view('evento_tratta',$data);
	   $this->load->view('footer');
	}
	
	

	public function evento_tratta_total()
	{
	
	   $session_user = $this->session->userdata('session_user');
	   $this->load->view('header');
	   $data['allCustomers']=$this->db_model->getallCustomerGenderNationWise();
	   $this->load->view('evento_tratta_total',$data);
	   $this->load->view('footer');
	}
	
 }
