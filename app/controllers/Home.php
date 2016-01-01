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
              $model = $this->load->model("Panel_Model");
            $urunarray = array();
            $kategori = array();
               $kategoriler = array();
            $urun = array();
            
            $urunliste = $model->urunselect();
            $b=0;
            foreach ($urunliste as $urunlistee) {
                $urun[$b]['urun_id'] = $urunlistee['urun_id'];
                $urun[$b]['urun_resim'] = $urunlistee['urun_resim'];
                $urun[$b]['urun_aciklama'] = $urunlistee['urun_aciklama'];
                $urun[$b]['urun_fiyat'] = $urunlistee['urun_fiyat'];
                $urun[$b]['urun_kategori'] = $urunlistee['urun_kategori'];
                $b++;
            }
            
            //kategorileri listeleme
            $kategoriliste = $model->kategoriAnasayfa();
            $a = 0;
            foreach ($kategoriliste as $kategorilistee) {
                $kategori[$a]['ID'] = $kategorilistee['ID'];
                $kategori[$a]['ad'] = $kategorilistee['ad'];
                $a++;
            }
              //kategorileri Menü listeleme
            $kategoriMenu = $model->kategoriselect();
            $a = 0;
            foreach ($kategoriMenu as $kategorilistee) {
                $kategoriler[$a]['ID'] = $kategorilistee['ID'];
                $kategoriler[$a]['ad'] = $kategorilistee['ad'];
                $a++;
            }
            
            
            $urunarray[0] = $urun;
            $urunarray[1] = $kategori;
            

        $this->load->view("Template_FrontEnd/header",$kategoriler);
        $this->load->view("Template_FrontEnd/home",$urunarray);
        $this->load->view("Template_FrontEnd/footer");

    }
    public function urunler(){
        
     $model = $this->load->model("Panel_Model");
       
            $kategori = array();
            $urun = array();
            $urunler = array();
            $urunliste = $model->urunselect();
            $b=0;
            foreach ($urunliste as $urunlistee) {
                $urun[$b]['urun_id'] = $urunlistee['urun_id'];
                $urun[$b]['urun_resim'] = $urunlistee['urun_resim'];
                $urun[$b]['urun_aciklama'] = $urunlistee['urun_aciklama'];
                $urun[$b]['urun_fiyat'] = $urunlistee['urun_fiyat'];
                $urun[$b]['urun_kategori'] = $urunlistee['urun_kategori'];
                $b++;
            }
            
            //kategorileri listeleme
            $kategoriliste = $model->kategoriselect();
            $a = 0;
            foreach ($kategoriliste as $kategorilistee) {
                $kategori[$a]['ID'] = $kategorilistee['ID'];
                $kategori[$a]['ad'] = $kategorilistee['ad'];
                $a++;
            }
            $urunler[0] =$urun;
            $urunler[1] =$kategori;
         $this->load->view("Template_FrontEnd/header", $kategori);
         $this->load->view("Template_FrontEnd/urunler",$urunler);
        $this->load->view("Template_FrontEnd/footer");
        
        
    }
    
     public function  hakkimizda(){
         $this->load->view("Template_FrontEnd/header",  $this->header());
          $this->load->view("Template_FrontEnd/hakkimizda");
        $this->load->view("Template_FrontEnd/footer");
        
        
    }
    public function  iletisim(){
         $this->load->view("Template_FrontEnd/header",  $this->header());
          $this->load->view("Template_FrontEnd/iletisim");
        $this->load->view("Template_FrontEnd/footer");
        
    }
    
    public function  header(){
              $model = $this->load->model("Panel_Model");
            $katList = array();
            $kategori = array();
            $urun = array();
            
            $urunliste = $model->urunselect();
            $b=0;
            foreach ($urunliste as $urunlistee) {
                $urun[$b]['urun_id'] = $urunlistee['urun_id'];
                $urun[$b]['urun_resim'] = $urunlistee['urun_resim'];
                $urun[$b]['urun_aciklama'] = $urunlistee['urun_aciklama'];
                $urun[$b]['urun_fiyat'] = $urunlistee['urun_fiyat'];
                $urun[$b]['urun_kategori'] = $urunlistee['urun_kategori'];
                $b++;
            }
            
            //kategorileri listeleme
            $kategoriliste = $model->kategoriselect();
            $a = 0;
            foreach ($kategoriliste as $kategorilistee) {
                $kategori[$a]['ID'] = $kategorilistee['ID'];
                $kategori[$a]['ad'] = $kategorilistee['ad'];
                $a++;
            }
            
            $katList[0] = $urun;
            $katList[1] = $kategori;
            return $katList;
    }

    
}
?>

