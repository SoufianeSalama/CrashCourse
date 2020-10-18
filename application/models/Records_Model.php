<?php

class Records_Model extends CI_Model{

    public function getRecordsFromDB(){
        $sSQL = "SELECT * FROM records";    //SQL Statement
        // SQL Statement uitvoeren en resultaat in een variable steken
        return $this->db->query($sSQL)->result(); 
        
    }
   
}

