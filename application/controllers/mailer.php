<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mailer extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->helper(array('form','html','url'));
            $this->load->library(array('form_validation','javascript'));
            $this->load->database();
            $this->load->model('crmdb');
            
        }
        
        private function email($email){
            echo "<br> $email";
        }
           
        public function sync(){
            if($this->crmdb->check_event()){
                $r=$this->crmdb->get_event();
                    if($r[0]->date==date("Y-m-d")){ 
                        if($rl=$this->crmdb->get_mail_list(date("Y-m-d"))){
                            foreach($rl as $v){
                                $this->email($v->email);
                            }
                        }
                        else{
                            echo "sorry";
                        }
                        
               }
            }
            else {
                echo "false";
            }
        }
        
        
        
        
        
        
}