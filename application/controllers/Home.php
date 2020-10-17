<?php
defined('BASEPATH') OR exit ('No direct script access allowed');
class Home extends CI_Controller 
{
    public function __construct(){
        parent :: __construct();

    }

    public function index(){
        $data['type_akun'] = $this->session->userdata('type_akun');            
		$data['id'] = $this->session->userdata('id'); 
        $data['username'] = $this->session->userdata('username'); 
        
        $data['header']="template/template_header.php";
        $data['css']="home/vhomePage_css.php";
        $data['content']="home/vhomePage.php";
        $data['js']="home/vhomePage_js.php";
        $data['footer']="template/template_footer.php";

        $this->load->view('template/vtemplate',$data);
    }
}

?>