<script type="text/javascript">
    // active class'ını alacak link'in id'si
    activePage = "urunlerimiz";
</script>
<div class="container">
    <?php error_log("katsId:" . $_POST["id"]); ?>
    <!-- Start Services Icons -->
    <div class="row">
        <!-- Divider -->
        <div class="hr1 margin-top"></div>
        <!-- Start Recent Projects Carousel -->
        <div class="recent-projects">
            <h4 class="title"><span><?php
                    $urunMiktar = count($model[0]);
                    $katId = 36;
                    for ($u = 0; $u < $urunMiktar; $u++) {
                        if ($model[0][$u]["urun_kategori"] == $katId) {
                            echo "Kategori Adı:";
                            echo $model[1][$katId]["ad"];
                            break;
                        }
                    }
                    ?></span></h4>
            <?php
            for ($u = 0; $u < $urunMiktar; $u++) {
                if ($model[0][$u]["urun_kategori"] == $katId) {
                    ?>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="portfolio-item item">
                            <div class="portfolio-border">
                                <div class="portfolio-thumb">
                                    <a class="lightbox" title="<?php echo $model[0][$u]["urun_aciklama"]; ?>" href="<?php echo SITE_URLUResim . $model[0][$u]["urun_resim"]; ?>">
                                        <div class="thumb-overlay"><i class="fa fa-arrows-alt"></i></div>
                                        <img alt="" src="<?php echo SITE_URLUResim . $model[0][$u]["urun_resim"]; ?>" />
                                    </a>
                                </div>
                                <div class="portfolio-details">
                                    <a href="#">
                                        <h4><?php echo $model[0][$u]["urun_aciklama"]; ?></h4>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                }
            }
            ?>

        </div>
    </div>
</div>
</div>
