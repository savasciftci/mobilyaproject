

<aside class="main-sidebar">

    
    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo SITE_PROFILRESIM; ?>/<?php echo Session::get("presim"); ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo Session::get("kadi"); ?></p>
                <a href="<?php echo SITE_URLA; ?>/Profil"><i class="fa fa-circle text-success"></i> Profil</a>
            </div>
        </div>
        <!-- search form -->
        <ul class="sidebar-menu">

            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>ÜRÜNLER</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo SITE_URLA; ?>/Urunler"><i class="fa fa-circle-o"></i> Yeni Ürün Ekle</a></li>
                    <li class="active"><a href="index2.html"><i class="fa fa-circle-o"></i> Ürün Düzenle/Sil</a></li>
                </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-dashboard"></i> <span>KATEGORİLER</span> <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">
                    <li class="active"><a href="<?php echo SITE_URLA; ?>/Kategoriler"><i class="fa fa-circle-o"></i> Yeni Kategori Ekle</a></li>
                    <li><a href="index2.html"><i class="fa fa-circle-o"></i> Kategori Düzenle/Sil</a></li>
                </ul>
            </li>
            <li><a href="<?php echo SITE_URLA; ?>/GenelAyarlar"><i class="fa fa-cog"></i> <span>GENEL AYARLAR</span></a></li>
            <div class="modal-footer">
                <a href="<?php echo SITE_URL;?>/login/logout"><button type="button"  class="btn btn-warning" data-dismiss="modal">Çıkış Yap</button></a>>
            </div>
         
        </ul>

    </section>

</aside>
