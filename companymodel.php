<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class companymodel extends CI_Model 
{
    public function getData($country,$status){
        // If the $country parameter is not empty then the below condition work

            if(!empty($country)){
                $this->db->where('country',$country);  
            }
           if(!empty($status)){
               $this->db->where('status',$status);
           }
           return $this->db->get('company')->result(); 
           //company is our database table name
    }
}
?>