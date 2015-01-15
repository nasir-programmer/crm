<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class mailer extends CI_Controller{

        function __construct() {
            parent::__construct();
            $this->load->helper(array('form','html','url'));
            $this->load->library(array('form_validation','javascript','email'));
            $this->load->database();
            $this->load->model('crmdb');
            
        }
        
        private function email($email){
            $this->email->from('your@example.com', 'Your Name');
            $this->email->to($email->email);
            $this->email->subject('Email Test');
            $this->email->message('Testing the email class.'); 
            if($this->email->send()){
                return true;
            }
            else{
                return false;
            }
        }
        
        protected function update_date($email){
            //if($this->crmdb->update_mail($email)){ return 1; }
            //else { return 0;}
            return $this->crmdb->update_mail($email)?1:0;
        } 
           
        public function sync(){
            if($this->crmdb->check_event()){
                $r=$this->crmdb->get_event();
                    if($r[0]->date==date("Y-m-d")){ 
                        if($rl=$this->crmdb->get_mail_list(date("Y-m-d"))){
                            foreach($rl as $v){
                               if($this->email($v)){
                                   if($this->update_date($v->email)){
                                       
                                   }                                   
                               }
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