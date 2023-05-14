<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

  public function __construct (){
      parent::__construct();
       $this->load->model('companymodel');// call your model here
  }

  public function index() {
       $this->load->view('datatable');   // calling view 
  }

   public function getdata() {
      $country=$_POST['country']; // get parameter pass from ajax call
      $status=$_POST['status'];
      $result = $this->companymodel->getData($country,$status);   //  pass parameter to model
      $data=array();
      $i=1;
     foreach($result as $val){
        $data[]=array(                                  // push data in array
         $i,
         $val->companyName,
         $val->status,
         $val->country,
        );
        $i++;
     }
      
      $output=array("data"=>$data);
      echo json_encode($output); // send output as json to ajax call
   }