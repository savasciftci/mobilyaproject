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

$(document).on('click', 'a#usil', function (e) {
    var id = $(this).attr("value");
    if(confirm('Ürünü silmek istediğinize emin misiniz?')){
          $.ajax({
        type: "post",
        url: SITE_URL + "/Admin_Ajax",
        cache: false,
        dataType: "json",
        data: {"id": id, "tip": "urunSil"},
        success: function (cevap) {
            if (cevap.hata) {
                reset();
                alertify.alert(cevap.hata);
                return false;
            } else {
                 $("tr#uruntable_" + id).remove();                      
                reset();
                alertify.success(cevap.result);
                return false;
            }
        }
    });
    }
});

$(document).on('click', 'a#uduzenle', function (e) {
    var id = $(this).attr("value");
    var aciklama = $(this).parent().parent().find('td:eq(0)').text();
    var fiyat = $(this).parent().parent().find('td:eq(1)').text();
   // var kategori = $(this).parent().parent().find('td:eq(2)').text();
    $("#sakliID").val(id);
    $("#durunAciklama").val(aciklama);
    $("#durunFiyat").val(fiyat);
     // $("#durunKategori").val(kategori);
 
    $("#urunModal").modal('show');
});


$(document).on('click', '#urunDuzenle', function (e) {
    var aciklama = $("#durunAciklama").val();
    var fiyat = $("#durunFiyat").val();
    var kategoriID =  $("#durunKategori").val();
    var kategoriAdi =  $("#durunKategori").text();
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