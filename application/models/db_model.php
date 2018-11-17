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
     public function getSupplierData()
    {
        $this->db->select('*');
        $query = $this->db->get('tbl_supplier_details');
	
        return $query->result_array();
    }
	
	public function getSupplierDetails($id)
	{
	 $this->db->select('*');
        $this->db->from('tbl_supplier_details');
        $this->db->where('tbl_sup_id', $id);
        $query = $this->db->get();
        if ($query->num_rows() >= 1) {
		print_r($query->result_array());
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
   