<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class overview extends CI_Controller {

    public function index()
    {
        $this->load->view('admin/overview');
        
    }

}

/* End of file overview.php */

?>