<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller{
    
        public function __construct() {
            parent::__construct();
            $this->header();
            
        }
        function layout(){
            //all layout here
        }
        
        function menue(){
            //menue item
        }
        
	function header(){
            //header here
        }
        function footer(){
            //footer here
        }
        
        public function __destruct() {
            parent::__destruct();
        }
            
        
}

