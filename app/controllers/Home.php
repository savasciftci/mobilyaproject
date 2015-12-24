<?php

class Home extends Controller {

    public function __construct() {
        error_log("geliyormu");
        parent::__construct();
    }

    public function index() {
        $this->front();
    }

    public function front() {
        $this->load->view("Template_FrontEnd/header");
        $this->load->view("Template_FrontEnd/home");
        $this->load->view("Template_FrontEnd/footer");

    }
    public function urunler(){
         $this->load->view("Template_FrontEnd/header");
         $this->load->view("Template_FrontEnd/urunler");
        $this->load->view("Template_FrontEnd/footer");
        
        
    }
    
     public function  hakkimizda(){
         $this->load->view("Template_FrontEnd/header");
          $this->load->view("Template_FrontEnd/hakkimizda");
        $this->load->view("Template_FrontEnd/footer");
        
        
    }
    public function  iletisim(){
         $this->load->view("Template_FrontEnd/header");
          $this->load->view("Template_FrontEnd/iletisim");
        $this->load->view("Template_FrontEnd/footer");
       
        
        
    }

    
}
?>

