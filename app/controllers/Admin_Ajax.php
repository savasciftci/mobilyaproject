<?php

class Admin_Ajax extends Controller {

    function __construct() {
        parent::__construct();
    }

    public function index() {
        $this->ajaxCall();
    }

    public function ajaxCall() {
        //session güvenlik kontrolü
        $form = $this->load->otherClasses('Form');

        if ($_POST && $_SERVER["HTTP_X_REQUESTED_WITH"] == "XMLHttpRequest") {
            $sonuc = array();
            //model bağlantısı
            $Panel_Model = $this->load->model("Panel_Model");
            $form->post("tip", true);
            $tip = $form->values['tip'];
            Switch ($tip) {
                case "profilDuzenle":
                    $form->post("ad", true);
                    $form->post("adres", true);
                    $form->post("sehir", true);
                    $form->post("cinsiyetval", true);
                    $form->post("email", true);
                    $ad = $form->values['ad'];
                    $adres = $form->values['adres'];
                    $sehir = $form->values['sehir'];
                    $cinsiyetval = $form->values['cinsiyetval'];
                    $email = $form->values['email'];
                    if ($ad != "") {
                        if ($adres != "") {
                            if ($sehir != "") {
                                if ($cinsiyetval != 0) {
                                    if ($email != "") {
                                        $id = Session::get("ID");
                                        if ($form->submit()) {
                                            $dataProfil = array(
                                                'fwkullaniciAd' => $ad,
                                                'fwkullaniciAdres' => $adres,
                                                'fwkullaniciSehir' => $sehir,
                                                'fwkullaniciCinsiyet' => $cinsiyetval,
                                                'fwkullaniciEmail' => $email
                                            );
                                        }
                                        $result = $Panel_Model->profilupdate($dataProfil, $id);
                                        if ($result) {
                                            $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                                        } else {
                                            $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                                        }
                                    } else {
                                        $sonuc["hata"] = "Lütfen maili boş girmeyiniz.";
                                    }
                                } else {
                                    $sonuc["hata"] = "Lütfen cinsiyeti boş girmeyiniz.";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen şehri boş girmeyiniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen adresi boş girmeyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen adınızı boş girmeyiniz.";
                    }
                    break;
                case "profilSil":
                    $form->post("yeniveri", true);
                    $id = $form->values['yeniveri'];
                    $resultdelete = $Panel_Model->profildelete($id);
                    if ($resultdelete) {
                        $sonuc["result"] = "İşlem Başarılı.";
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                    }
                    break;
                default :
                    header("Location:" . SITE_URL);
                    break;

                case "KategoriEkle":
                    $form->post("kategoriAd", true);
                    $form->post("kicerik", true);
                    $kategoriAd = $form->values['kategoriAd'];
                    $kicerik = $form->values['kicerik'];

                    if ($kicerik != "") {
                        if ($kategoriAd != "") {
                            if ($form->submit()) {
                                $dataKategori = array(
                                    'ad' => $kategoriAd,
                                    'icerik' => $kicerik
                                );
                                $result = $Panel_Model->kategoriinsert($dataKategori);
                                if ($result) {
                                    $sonuc["result"] = "Başarılı bir şekilde kategori eklenmiştir.";
                                } else {
                                    $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                                }
                            } else {
                                
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen kategoriyi boş girmeyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen iceriği boş girmeyiniz.";
                    }
                    break;

                case "katduzenle":
                    error_log("11111111");
                    $form->post("ad", true);
                    $form->post("icerik", true);
                    $form->post("id", true);
                    $ad = $form->values['ad'];
                    $icerik = $form->values['icerik'];
                    $id = $form->values['id'];
                    error_log($ad);
                    error_log($icerik);
                    error_log($id);
                    if ($ad != "") {
                        if (icerik != "") {
                            if ($form->submit()) {
                                $dataKategori = array(
                                    'ad' => $ad,
                                    'icerik' => $icerik
                                );
                            }
                            $result = $Panel_Model->kategoriupdate($dataKategori, $id);
                            if ($result) {
                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                            } else {
                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen içeriği boş girmeyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen adınızı boş girmeyiniz.";
                    }
                    break;
                case "katEkle":
                    $form->post("ad", true);
                    $form->post("icerik", true);
                    $ad = $form->values['ad'];
                    $icerik = $form->values['icerik'];
                    if ($ad != "") {
                        if (icerik != "") {
                            if ($form->submit()) {
                                $dataKategori = array(
                                    'ad' => $ad,
                                    'icerik' => $icerik
                                );
                            }
                            $result = $Panel_Model->kategoriinsert($dataKategori, $id);
                            if ($result) {
                                $sonuc["result"] = "Başarılı bir şekilde kategori eklenmiştir.";
                            } else {
                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen içeriği boş girmeyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen adınızı boş girmeyiniz.";
                    }
                    break;
                case "kategoriSil":
                    $form->post("id", true);
                    $id = $form->values['id'];
                    $resultdelete = $Panel_Model->kategoridelete($id);
                    if ($resultdelete) {
                        $sonuc["result"] = "İşlem Başarılı.";
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                    }
                    break;
                case "urunSil":
                    $form->post("id", true);
                    $id = $form->values['id'];
                    $resultdelete = $Panel_Model->urundelete($id);
                    if ($resultdelete) {
                        $sonuc["result"] = "İşlem Başarılı.";
                    } else {
                        $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                    }
                    break;
                default :
                    header("Location:" . SITE_URL);
                    break;
                case "urunDuzenle":
                      require "app/otherClasses/class.upload.php";
                    $form->post("aciklama", true);
                    $form->post("fiyat", true);
                    $form->post("kategoriID", true);
                    $form->post("id", true);

                    $aciklama = $form->values['aciklama'];
                    $fiyat = $form->values['fiyat'];
                    $kategoriID = $form->values['kategoriID'];
                    $id = $form->values['id'];
                    if ($aciklama != "") {
                        if ($fiyat != "") {
                            if ($kategoriID != -1) {
                                $realName = $_FILES['file']['name'];
                                if ($realName != "") {
                                    $image = new Upload($_FILES['file']);
                                    if ($image->uploaded) {
                                        // sadece resim formatları yüklensin
                                        $image->allowed = array('image/*');
                                        $image->image_min_height = 250;
                                        $image->image_min_width = 250;
                                        $image->image_max_height = 2000;
                                        $image->image_max_width = 2000;
                                        $image->file_new_name_body = time();
                                        $image->file_name_body_pre = 'mobilya_';
                                        $image->image_resize = true;
                                        $image->image_ratio_crop = true;
                                        $image->image_x = 900;
                                        $image->image_y = 900;
                                        $image->Process("upload/urunler");
                                        if ($image->processed) {
                                            if ($form->submit()) {
                                                $dataUrun = array(
                                                    'urun_aciklama' => $aciklama,
                                                    'urun_fiyat' => $fiyat,
                                                    'urun_kategori' => $kategoriID,
                                                    'urun_resim' => $image->file_dst_name
                                                );
                                            }
                                            $result = $Panel_Model->urunupdate($dataUrun, $id);
                                            if ($result) {
                                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                                            } else {
                                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                                            }
                                        } else {
                                            $sonuc["hata"] = $image->error;
                                        }
                                    } else {
                                        $sonuc["hata"] = $image->error;
                                    }
                                } else {
                                    $sonuc["hata"] = "Lütfen Resim Seçiniz";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen bir kategori seçiniz.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen fiyatı boş girmeyiniz.";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen açıklamayı boş girmeyiniz.";
                    }
                    break;
                default :
                    header("Location:" . SITE_URL);
                    break;


                case "urunEkle":
                    require "app/otherClasses/class.upload.php";
                    $form->post("urunaciklama", true);
                    $form->post("urunkategori", true);
                    $form->post("urunfiyat", true);
                    $urunaciklama = $form->values['urunaciklama'];
                    $urunkategori = $form->values['urunkategori'];
                    $urunfiyat = $form->values['urunfiyat'];
                    if ($urunaciklama != "") {
                        if ($urunkategori != "") {
                            if ($urunfiyat != "") {
                                $realName = $_FILES['file']['name'];
                                error_log("2.real nem:".$realName);
                                if ($realName != "") {
                                    $image = new Upload($_FILES['file']);
                                    if ($image->uploaded) {
                                        // sadece resim formatları yüklensin
                                        $image->allowed = array('image/*');
                                        $image->image_min_height = 250;
                                        $image->image_min_width = 250;
                                        $image->image_max_height = 2000;
                                        $image->image_max_width = 2000;
                                        $image->file_new_name_body = time();
                                        $image->file_name_body_pre = 'mobilya_';
                                        $image->image_resize = true;
                                        $image->image_ratio_crop = true;
                                        $image->image_x = 900;
                                        $image->image_y = 900;
                                        $image->Process("upload/urunler");

                                        if ($image->processed) {
                                            if ($form->submit()) {
                                                $dataurun = array(
                                                    'urun_aciklama' => $urunaciklama,
                                                    'urun_kategori' => $urunkategori,
                                                    'urun_fiyat' => $urunfiyat,
                                                    'urun_resim' => $image->file_dst_name
                                                );
                                            }
                                            $result = $Panel_Model->uruninsert($dataurun);
                                            if ($result) {
                                                $sonuc["result"] = "Başarılı bir şekilde güncellenme olmuştur.";
                                            } else {
                                                $sonuc["hata"] = "Bir hata oluştu.Tekrar deneyiniz";
                                            }
                                        } else {
                                            $sonuc["hata"] = $image->error;
                                        }
                                    } else {
                                        $sonuc["hata"] = $image->error;
                                    }
                                } else {
                                    $sonuc["hata"] = "Lütfen Resim Seçiniz";
                                }
                            } else {
                                $sonuc["hata"] = "Lütfen fiyat bölümünü  boş bırakmayınız.";
                            }
                        } else {
                            $sonuc["hata"] = "Lütfen kategori seciniz";
                        }
                    } else {
                        $sonuc["hata"] = "Lütfen açıklamayı  boş girmeyiniz.";
                    }



                    break;
            }
            echo json_encode($sonuc);
        } else {
            header("Location:" . SITE_URL);
        }
    }

}
?>
                                                                                                     
