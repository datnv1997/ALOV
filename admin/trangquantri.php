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
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu1">Chính sách kiều bào</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu2">Hoạt động</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu3">Trong nước</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="pill" href="#menu4">Ngoài nước</a>
                    </li>
                </ul>

            </div>
            <!-- Tab panes -->
            <div class="col-md-9" id="quantri">
                <div class="tab-content">
                    <div class="tab-pane container active" id="home">

                    </div>
                    <div class="tab-pane container fade" id="menu1">
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
                    </div>
                    <div class="tab-pane container fade" id="menu2">
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
                    </div>
                    <div class="tab-pane container fade" id="menu3">
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
                    </div>
                    <div class="tab-pane container fade" id="menu4">
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
                    </div>
                </div>
            </div>

        </div>
    </div>

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
        var id = $(this).attr("id");
        var id_date = $('#date' + id).attr("id");
        var id_link = $('#link' + id).attr("id");
        var id_ten_vanban = $('#ten_vb' + id).attr("id");

        var val_ten_vanban = $('#ten_vanban' + id).text();
        var val_date = $('#date' + id).text();
        var val_link = $('#link' + id).attr("href");
        console.log(val_ten_vanban,val_date,val_link);
        var text_area_vb =
            "<textarea name='area_vanban' cols='15' rows='6' style='border-style:none' >" +
            val_ten_vanban + "</textarea>";
        $('#ten_vb' + id).empty();
        $('#ten_vb' + id).append(text_area_vb);

        var text_area_date =
            "<textarea name='area_date' cols='10' rows='6' style='border-style:none' >" + val_date +
            "</textarea>";
        $('#date' + id).empty();
        $('#date' + id).append(text_area_vb);
    })

});
</script>

</html>