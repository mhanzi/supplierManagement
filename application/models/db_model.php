<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class db_model extends CI_Model
{
    function db_model()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('form_validation');
        $this->load->helper('date');
        
    }
     public function getSuppliersData($search)
    {
     $sql = "SELECT * FROM tbl_suppliers_details 
			 WHERE tbl_supplier_name LIKE '%".$search."%'
		     OR descrizione LIKE '%".$search."%' 
		     OR inizio_fornitura LIKE '%".$search."%' 
		     OR fine_fornitura LIKE '%".$search."%' 
             OR partita_IVA LIKE '%".$search."%'
             OR tipologia LIKE '%".$search."%' 
             OR stato LIKE '%".$search."%' ";
     $result = $this->db->query($sql);
            if ($result->num_rows() >= 1) {
            $data = $result->result_array();
            return $data;
            } else {
			
            return 0;
        }
    }
	

	public function get_SupplierDetails($id,$search)
	{
	 $sql = "SELECT * FROM supplier_detail 
			 WHERE supplier_id= ".$id." AND  sup_tipologie LIKE '%".$search."%'
		     OR sup_descrizione LIKE '%".$search."%' 
		     OR sup_inizio LIKE '%".$search."%' 
		     OR sup_fine LIKE '%".$search."%' 
             OR sup_listino LIKE '%".$search."%'
             OR sup_sconto LIKE '%".$search."%' 
             OR sup_stato LIKE '%".$search."%' ";
     $result = $this->db->query($sql);
            if ($result->num_rows() >= 1) {
            $data = $result->result_array();
            return $data;
            } else {
			
            return 0;
        }
    }
	public function getSupplierDetails($id)
	{
	    $this->db->select('*');
        $this->db->from('supplier_detail');
        $this->db->where('supplier_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
        return $query->result_array();
	
        } else {
            return 0; 
        }
    }
	public function getSuppliersDetails($id)
	{
	    $this->db->select('*');
        $this->db->from('tbl_suppliers_details');
        $this->db->where('tbl_sup_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
		
        return $query->result_array();
	
        } else {
            return false; 
        }
    }
	public function getalluserDetails()
	{
	    $this->db->select('*');
        $this->db->from('tbl_customer_list');
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
		
        return $query->result_array();
	
        } else {
            return false; 
        }
	}
	public function getallsupDetails($id)
	{
	    $this->db->select('*');
        $this->db->from('tbl_customer_list');
        $this->db->where('customer_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
		
        return $query->result_array();
	
        } else {
            return false; 
        }
	}
	
	public function getallCustomerGenderNationWise(){
	//get the customers nationality wise gender wise user type
	    $query = 'SELECT tbl_user_type.user_type as user_type,customer_nazione FROM tbl_customer_list 
		INNER JOIN tbl_user_type ON tbl_user_type.tbl_user_type_id = tbl_customer_list.user_type 
		Group BY tbl_customer_list.user_type , `customer_nazione`';
        $query_result = $this->db->query($query);
        return $query_result->result_array();
	 	
	}
	
	
	public function getallDetails($id)
	{
	    $this->db->select('*');
        $this->db->from('supplier_detail');
        $this->db->where('detail_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
//print_r( $query->result_array());
        return $query->result_array();
	
        } else {
            return false; 
        }
    }


		public function get_seat_details($type)
	{
		$this->db->select('*');
        $this->db->from('assign_seats');
		$this->db->where('seat_type',$type);
		
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
		   return $query->result_array();
	
        } else {
            return false; 
        }
    }
	
	
	public function get_images($img) {
        // select uploded image or file name
        $this->db->select('file_name');
        $this->db->from('tbl_file_uploader');
        $this->db->where('file_id', $img);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
            $data = $query->result_array();
		
            return $data;
        } else {
            return false; // image is not Exists
        }
    }
	}
   