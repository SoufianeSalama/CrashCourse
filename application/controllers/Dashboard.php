<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	
	public function index()
	{
        //$this->load->view('welcome_message');
        $this->getRecords();
    }
    
    public function getRecords(){
        // Model laden
        $this->load->model('Records_Model');
        $aRecords = $this->Records_Model->getRecordsFromDB();
        $data["aRecords"] = $aRecords;
        // print_r
        $this->load->view('master_view', $data);
    }
   
}
