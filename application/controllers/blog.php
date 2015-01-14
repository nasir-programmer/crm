<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class blog extends CI_Controller {


	public function index()
	{
            $this->load->view('blog_view');
           /*// hello display here for requesting file*/
            //echo "only for education purpose";
	}
}

?>



