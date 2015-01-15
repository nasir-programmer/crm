<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mailer extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->helper(array('form','html','url'));
            $this->load->library(array('form_validation','javascript'));
            $this->load->database();
            $this->load->model('crmdb');
            
        }
           
        public function sync(){
            if($this->crmdb->check_event()){
                $r=$this->crmdb->get_event();
                    if($r[0]->date==date("Y-m-d")){ 
                        echo "yes";
               }
            }
            else {
                echo "false";
            }
        }
        
        
        
        
        
        
}