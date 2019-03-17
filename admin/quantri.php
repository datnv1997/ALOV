<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALOV</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../assets/scss/qt.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="../assets/js/quantri.js"></script>
</head>

<body>
    <section id="quantri">
        <div class="container">

            <div class="row" style="height:100vh;">
                <div class="col-md-3 bg-secondary text-white h-100">

                    <div class="menu ">
                        <div class="dropdown">
                            <span>Trang chủ</span>
                        </div>
                        <div class="dropdown">
                            <span class="menu-toggle t1" data-toggle="dropdown">
                                Trong nước&nbsp<i class="fas fa-arrow-down"></i>
                            </span>
                            <div class="menu-dropdown m1">
                                <a class="" href="#">Chính phủ</a>
                                <a class="" href="#">Tình hình kinh tế - xã hội</a>

                            </div>
                        </div>
                        <div class="dropdown">
                            <span class="menu-toggle t2" data-toggle="dropdown">
                                Ngoài nước&nbsp<i class="fas fa-arrow-down"></i>
                            </span>
                            <div class="menu-dropdown m2">
                                <a class="" href="#">Tin tức ngoài nước</a>
                                <a class="" href="#">Kiều bào và chính phủ</a>

                            </div>
                        </div>
                        <div class="dropdown">
                            <span class="menu-toggle t3" data-toggle="dropdown">
                                Hoạt động&nbsp<i class="fas fa-arrow-down"></i>
                            </span>
                            <div class="menu-dropdown m3">
                                <a class="" href="#">Tin tức</a>
                                <a class="" href="#">Hình ảnh</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <span class="menu-toggle t4" data-toggle="dropdown">
                                Chính sách kiều bào&nbsp<i class="fas fa-arrow-down"></i>
                            </span>
                            <div class="menu-dropdown m4">
                                <a id="vanban-m4">Văn bản</a>
                                <a class="" href="#">Thông cáo với báo chí</a>
                            </div>
                        </div>
                        <div class="dropdown">
                            <span>Phản hồi&nbsp</span><span class="badge badge-light">4</span>
                        </div>
                    </div>

                </div>
                <div class="col-md-9">

                    <section id="trangchu" class="section">

                    </section>
                    <section id="trongnuoc" class="section">
                        <section id="kinhte">
                            <div class="header btn btn-info mt-2">
                                Kinh tế trong nước
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                            include '../trongnuoc/trongnuoc-kinhte.php' ;
                            $kinhte=new KinhTe();
                            $kinhte->show();
                            ?>
                        </section>
                    </section>
                    <section id="ngoainuoc" class="section">
                        <section id="kieubaovacp">
                            <div class="header btn btn-info mt-2">
                                Kiều bào và chính phủ
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                            include '../ngoainuoc/kieubaovacp.php';
                            $kieubao=new KieuBao();
                            $kieubao->show();
                            ?>
                        </section>
                        <section id="tintuc_nc">
                            <div class="header btn btn-info mt-2">
                                Tin tức Ngoài nước
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                           include '../ngoainuoc/tintuc_ngoainuoc.php';
                           $tintuc=new NgoaiNuocTT();
                           $tintuc->show();
                           ?>
                        </section>

                    </section>
                    <section id="hoatdong" class="section">
                        <section id="hinhanh">
                            <div class="header btn btn-info mt-2">
                                Hình ảnh hoạt động
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                            include '../hoatdong/hoatdong_img.php';
                            $hd=new HdImg();
                            $hd->show();
                            ?>
                        </section>
                    </section>
                    <section id="chinhsachkieubao">
                        <section id="vanban" class="section vanban">
                            <div class="header btn btn-info mt-2">
                                Hệ thông văn bản
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                                include '../chinhsachkieubao/vanban.php' ;
                                $vanban=new VanBan();
                                $vanban->show();
                            ?>
                        </section>
                        <section id="thongcao" class="section">
                            <div class="header btn btn-info mt-2">
                                Thông cáo với báo chí
                            </div>
                            <hr class="bg-info mt-0">
                            <?php
                                include '../chinhsachkieubao/thongcao.php';
                                $thongcao = new ThongCao();
                                $thongcao->show();
                            ?>
                        </section>
                    </section>
                    <section id="phanhoi">

                    </section>

                </div>
            </div>
        </div>
    </section>
</body>
<script>
$(function() {
    //xoa vanban
    $(".icon-xoa").click(function() {
        var id_del = $(this).attr("id");
        console.log(id_del);
        $.ajax({
            //kiểu post
            type: "POST",

            url: "/ALOV/chinhsachkieubao/xoa.php",
            data: {
                id: id_del
            },
            success: function() {
                $("tr" + "#" + id_del).remove();
            },
            error: function(e) {
                alert("fail");
            }
        })
    });
    //xoa thongcao
    $(".icon-xoa-thongcao").click(function() {
        var id_thongcao = $(this).attr("id");
        console.log(id_thongcao);
        $.ajax({
            //kiểu post
            type: "POST",
            url: "/ALOV/chinhsachkieubao/xoa.php",
            data: {
                id_del_thongcao: id_thongcao
            },
            success: function() {

                $("tr" + "#" + id_thongcao).remove();
            },
            error: function(e) {
                alert("fail");
            }
        })
    });
    $(".icon-xoa-kinhte").click(function() {
        var id_kinhte = $(this).attr("id");
        console.log(id_kinhte);
        $.ajax({
            //kiểu post
            type: "POST",
            url: "/ALOV/trongnuoc/xoa_trongnuoc.php",
            data: {
                id_del_kinhte: id_kinhte
            },
            success: function() {

                $("tr" + "#" + id_kinhte).remove();
            },
            error: function(e) {
                alert("fail");
            }
        })
    });
    $(".icon-xoa-kbcp").click(function() {
        var id_nc_kbcp = $(this).attr("id");
        $.ajax({
            //kiểu post
            type: "POST",
            url: "/ALOV/ngoainuoc/xoa_nc.php",
            data: {
                id_del_kbcp: id_nc_kbcp
            },
            success: function() {

                $("tr" + "#" + id_nc_kbcp).remove();
            },
            error: function(e) {
                alert("fail");
            }
        })
    });
    $(".icon-xoa-nctt").click(function() {
        var id_nc_tt = $(this).attr("id");
        
        $.ajax({
            //kiểu post
            type: "POST",
            url: "/ALOV/ngoainuoc/xoa_nc.php",
            data: {
                id_del_tt_nc: id_nc_tt
            },
            success: function() {
                $("tr" + "#" + id_nc_tt).remove();
            },
            error: function(e) {
                alert("fail");
            }
        })
    });
    //update
    $('.icon-edit').click(function() {
        var id= $(this).attr("id");
        var id_date= $('#date'+id).attr("id");
        var id_link= $('#link'+id).attr("id");
        var id_ten_vanban= $('#ten_vb'+id).attr("id");

        var val_ten_vanban= $('#ten_vanban'+id).text();
        var val_date= $('#date'+id).text();
        var val_link= $('#link'+id).text();
        
        var text_area_vb = "<textarea name='area_vanban' cols='7' rows='6' style='border-style:none' >"+val_ten_vanban+"</textarea>";
        $('#ten_vb'+id).empty();
        $('#ten_vb'+id).append(text_area_vb);

        var text_area_date = "<textarea name='area_date' cols='7' rows='6' style='border-style:none' >"+val_date+"</textarea>";
        $('#date'+id).empty();
        $('#date'+id).append(text_area_vb);
    })

});
</script>

</html>