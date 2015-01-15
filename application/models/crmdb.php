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

function update_mail($email){
    $q="UPDATE `client_list` SET `last_mail`= '1270-00-00' WHERE `email` LIKE $email";
    if($this->$db->query($q)){
        return true;
    }
    else{
        return false;
    }        
}

function get_mail_list($date){
    $qr="SELECT * FROM `client_list` WHERE `active` = 1 and `last_mail` != $date";
    $q=$this->db->query($qr);
    if($q->num_rows()>0){
        $list=array();
        foreach($q->result() as $row){
            $list[]=$row;
        }
        return $list;
    }
    else{
        return false;
    }
   
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
