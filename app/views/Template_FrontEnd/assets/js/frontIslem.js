

$(document).on("click", "a#katid", function (e) {
        var id  = 5;

    $.ajax({
        type: "post",
        url: SITE_URL + "/home/urunler",
        data: {"id": id}
    });

});
