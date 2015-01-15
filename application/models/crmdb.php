<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class crmdb extends CI_Model{
    
function __construct(){
	parent::__construct();
}

function check_event(){
    $q=$this->db->query('select * from events');
    if($q->num_rows()>0){
        return true;
    }
    else{
        return false;
    }
}

function check_today_event(){
  // $r= $this->get_event();
   
}

function get_mail_list(){
    $q=$this->db->query('SELECT * FROM `client_list`');
   
}

function get_event(){
    $q=$this->db->query('select * from events');
    if($q->num_rows()>0){
        $r=$q->result();
         return $r;       
    }
    else{
        return false;
    }
}


}
