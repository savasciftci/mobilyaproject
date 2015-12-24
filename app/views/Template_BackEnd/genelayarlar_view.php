<script src="<?php echo SITE_BACK_ASSETS_JS; ?>/islem.js" type="text/javascript"></script>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Site Genel Ayarları
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- right column -->
            <div class="col-md-6">
                <!-- Horizontal Form -->
                <div class="box box-info">
                    <div class="box-header with-border">
                        <h3 class="box-title">Ayarlar Form</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <input type="hidden" class="form-control" id="profilid" value="" required>
                        <form class="form-horizontal">
                            <div class="box-body">
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Site Başlık</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="genelayarbaslik" placeholder="Site Başlığı" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Site Açıklaması</label>
                                    <div class="col-sm-9">
                                        <textarea class="form-control" name="genelayaracıklama" placeholder="Site Açıklaması" value="" style="resize: none" required></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">İş Tel</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="genelayartel" placeholder="Telefon" value="" required></input>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-3 control-label">Cep Tel</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="genelayarceptel" placeholder="Cep Telefonu" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">E-Posta</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" name="genelayarmail" placeholder="E-Posta" value="" required></input>
                                    </div>
                                </div>
                                  <div class="form-group">
                                    <label class="col-sm-3  control-label"> Adres</label>
                                    <div class="col-sm-9">
                                        <input type="text" name="genelayaradres" class="form-control"  placeholder="Adres" value="" required></input>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="col-sm-3 control-label">Şifre</label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control"  name="genelayarsifre" placeholder="Şifre" value="" required>
                                    </div>
                                </div>
                              
                            </div>
                            <div class="box-footer">
                                <button type="button" id="profilDuzenle" class="btn btn-info pull-right" >Ayarları Değiştir</button>
                            </div><!-- /.box-footer -->
                        </form>
                </div>
            </div><!--/.col (right) -->
        </div>   <!-- /.row -->
    </section><!-- /.content -->
</div><!-- /.content-wrapper -->