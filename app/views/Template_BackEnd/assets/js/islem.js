$(document).on("click", "button#profilDuzenle", function (e) {
    var ad = $("#ad").val();
    var adres = $("#adres").val();
    var sehir = $("input[name=sehir]").val();
    var cinsiyettext = $("#cinsiyet option:selected").text();
    var cinsiyetval = $("#cinsiyet option:selected").val();
    var email = $(".email").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"ad": ad, "adres": adres, "sehir": sehir,
            "cinsiyetval": cinsiyetval, "email": email, "tip": "profilDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
});
$(document).on("click", "button#profilSil", function (e) {
    reset();
    alertify.confirm("Silmek İstiyormusunuz", function (e) {
        if (e) {
            var id = $("#profilid").val();
            $.ajax({
                type: "post",
                url: SITE_URL + "/Admin_Ajax",
                cache: false,
                dataType: "json",
                data: {"yeniveri": id, "tip": "profilSil"},
                success: function (cevap) {
                    if (cevap.hata) {
                        reset();
                        alertify.alert(cevap.hata);
                        return false;
                    } else {
                        reset();
                        alertify.alert(cevap.result);
                        return false;
                    }
                }
            });
        } else {
            alertify.error("Silme İşlemi iptal edildi");
        }
    });
});

$(document).on('click', 'a#ksil', function (e) {
    var id = $(this).attr("value");
    if(confirm('Kategori silmek istediÄŸinize emin misiniz?')){
          $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"id": id, "tip": "kategoriSil"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                 $("tr#kattable_" + id).remove();                      
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
    }
});
$(document).on("click", "button#KategoriEkle", function (e) {
    var kategoriAd = $("#kategoriAd").val();
    var kicerik = $("#kicerik").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"kategoriAd": kategoriAd,"kicerik": kicerik, "tip": "KategoriEkle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
});

$(document).on("click", "button#urunekle", function (e) {
    var urunresim = $("#urunresim").val();
    var urunaciklama = $("#urunaciklama").val();
    var urunkategori = $("#urunkategori").val();
    var urunfiyat     = $("#urunfiyat").val();
   
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"urunresim": urunresim,"urunaciklama": urunaciklama,"urunkategori": urunkategori,"urunfiyat": urunfiyat, "tip": "urunekle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
});


$(document).on('click', 'a#uduzenle', function (e) {
    var id = $(this).attr("value");
    var aciklama = $(this).parent().parent().find('td:eq(0)').text();
    var fiyat = $(this).parent().parent().find('td:eq(1)').text();
        var kategoriID = $(this).parent().parent().find('td:eq(2)').attr("value");
        var urun_resim =  $("#urun_resim").val();
   // var kategori = $(this).parent().parent().find('td:eq(2)').text();
    $("#sakliID").val(id);
    $("#durunAciklama").val(aciklama);
    $("#durunFiyat").val(fiyat);
    
     $("#urunresim").val(urun_resim);
        $("#durunKategori").val(kategoriID);
 
 
    $("#urunModal").modal('show');
});


$(document).on('click', '#urunDuzenle', function (e) {
    var aciklama = $("#durunAciklama").val();
    var fiyat = $("#durunFiyat").val();
    var kategoriID =  $("#durunKategori").val();
    var kategoriAdi = $("#durunKategori option[value=" + kategoriID + "]").text();
    var id = $("#sakliID").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"aciklama": aciklama, "fiyat": fiyat,"kategoriID": kategoriID, "id": id, "tip": "urunDuzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                $("tr#uruntable_" + id + " td:eq(0)").text(aciklama);
                $("tr#uruntable_" + id + " td:eq(1)").text(fiyat);
                 $("tr#uruntable_" + id + " td:eq(2)").text(kategoriAdi);
                reset();
                alertify.success(cevap.result);
                $("#urunModal").modal('hide');
                return false;
            }
        }
    });
});

$(document).on('click', '#urunEkle', function (e) {
 $("#urunEkleModal").modal('show');
});

$(document).on('click', '#urunEklemeIslemi', function (e) {
var formData = new FormData();
    var aciklama = $("#edurunAciklama").val();
    var kategori = $("#edurunKategori").val();
    var fiyat = $("#edurunFiyat").val();
formData.append('urunaciklama', aciklama);
    formData.append('urunkategori', kategori);
    formData.append('urunfiyat', fiyat);
     formData.append('file', $("#fileInput")[0].files[0]);
    formData.append('tip', "urunEkle");
    $.ajax({
        type: "post",
         url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: formData,
        async: false,
        contentType: false,
        enctype: 'multipart/form-data',
        processData: false,
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                $("#urunEkleModal").modal('hide');
                return false;
            }
        }
    });
});


$(document).on('click', '#katEkle', function (e) {
 $("#katEkleModal").modal('show');
});
$(document).on('click', '#katEklemeIslemi', function (e) {

    var ad = $("#ekategoriadi").val();
    var icerik = $("#ekategoriicerik").val();

    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"ad": ad, "icerik": icerik, "tip": "katEkle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                $("#katEkleModal").modal('hide');
                return false;
            } else {
                reset();
                alertify.success(cevap.result);
                $("#katEkleModal").modal('hide');
                return false;
            }
        }
    });
});
$(document).on('click', 'a#duzenle', function (e) {
    var id = $(this).attr("value");
    var ad = $(this).parent().parent().find('td:eq(0)').text();
    var icerik = $(this).parent().parent().find('td:eq(1)').text();
    $("#sakliID").val(id);
    $("#dkategoriadi").val(ad);
    $("#dkategoriicerik").val(icerik);
    $("#myModal").modal('show');
});
$(document).on('click', '#katduzenle', function (e) {

    var ad = $("#dkategoriadi").val();
    var icerik = $("#dkategoriicerik").val();

    var id = $("#sakliID").val();
    $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"ad": ad, "icerik": icerik, "id": id, "tip": "katduzenle"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                $("#myModal").modal('hide');
                return false;
            } else {
                $("tr#kattable_" + id + " td:eq(0)").text(ad);
                $("tr#kattable_" + id + " td:eq(1)").text(icerik);
                reset();
                alertify.success(cevap.result);
                $("#myModal").modal('hide');
                return false;
            }
        }
    });
});