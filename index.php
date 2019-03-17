<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALOV</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/scss/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</head>

<body>
    <section id="header">
        <div class="over-lay">
            <div class="background " style="background:url('assets/img/banner.jpg');background-repeat: no-repeat;background-size: cover" >
                <div class="container">
                    <div class="row p-1">
                        <div class="col-12 col-md-2 anh text-center">
                            <img src="assets/img/12509766_672360956239700_7637113305167923230_n.jpg" alt="quoc-huy"
                                width="100px" height="100px" style="border-radius:50%;">
                        </div>
                        <div class="d-none d-sm-block col-md-9 content text-center text-md-left">
                            <a href="#"><span class="span-title">ALOV</span><span class="span-red">.VN</span></a>
                            <br>
                            <p class="span-detail">Hội liên lạc với người Việt Nam ở nước ngoài</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="menu" class="sticky-top">
        <nav class="navbar navbar-expand-lg bg-danger navbar-dark ">
            <div class="container">
                <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i>Trang chủ</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse ml-5" id="collapsibleNavbar">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Trong nước
                            </a>
                            <div class="dropdown-menu bg-danger ">
                                <a class="dropdown-item text-white" href="chinhphu.php">Chính phủ </a>
                                <a class="dropdown-item text-white" href="kinhte-xahoi.php">Tình hình kinh tế - xã
                                    hội</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Ngoài nước
                            </a>
                            <div class="dropdown-menu bg-danger ">
                                <a class="dropdown-item text-white" href="ngoainuoc-tintuc.php">Tin tức ngoài nước</a>
                                <a class="dropdown-item text-white" href="kieubao-chinhphu.php">Kiều bào và chính
                                    phủ</a>

                            </div>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Hoạt động
                            </a>
                            <div class="dropdown-menu bg-danger ">
                                <a class="dropdown-item text-white" href="hoatdong-tintuc.php">Tin tức </a>
                                <a class="dropdown-item text-white" href="hoatdong-hinhanh.php">Hình ảnh</a>

                            </div>
                        </li>
                        <li class="nav-item">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                                Chính sách kiều bào</a>
                            <div class="dropdown-menu bg-danger ">
                                <a class="dropdown-item text-white" href="hethongvanban.php">Hệ thống văn bản</a>
                                <a class="dropdown-item text-white" href="thongcao-baochi.php">Thông cáo với báo
                                    chí</a>
                            </div>
                        </li>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="gioithieu.php">Giới thiệu</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="lienhe.php">Liên hệ</a>
                        </li>
                        <li class="nav-item ">
                            <a class="btn btn-danger float-right mr-2 text-white" data-toggle="modal"
                                data-target="#myModal">Đăng nhập</a>
                        </li>

                    </ul>
                </div>

            </div>
        </nav>

    </section>
    <!-- The Modal -->
    <div class="modal fade" id="myModal">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header text-center">
                    <h4 class="modal-title">Đăng nhập</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">
                    
                    <form action="admin/trangquantri.php" method="get">
                        <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" >
                        <input type="password" class="form-control mt-3" placeholder="Mật khẩu" name="password" >
                        <button type="submit" class="form-control bg-danger text-white mt-3">
                            Đăng nhập
                        </button>
                    </form>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <section id="marquee">
        <marquee>Tin mới: <a href="#">Hội nghị thượng đỉnh Mỹ-Triều.</a></marquee>
    </section>
    <section id="body-nav">
        <div class="container">
            <div class="row">
                <div class="col-md-2 d-none d-md-block d-flex bg-danger ">
                    <div class="nav flex-column text-center nav-left ">
                        <li class="nav-item">
                            <a class="nav-link" href="hethongvanban.php">Hệ thống văn bản</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="chinhphu.php">Chính phủ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kinhte-xahoi.php">Tình hình kinh tế-xã hội</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="hoatdong-hinhanh.php">Những hình ảnh đồng bào nước ngoài</a>
                        </li>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="row">
                        <div class="col-md-8 slide ">
                            <a href="" class="tin-moi slide-show" id="1">
                                <img src="assets/img/221335_ttxvn_tran_dai_quang_gap_kieu_bao.jpg" alt="" width="100%" height="300px">
                                <div class="title-slide text-center over-lay">
                                    Trần Đại Quang gặp gỡ kiều bào
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 others-link d-none d-md-block">
                            <ul>
                                <li><a href="#">Mỹ chuẩn bị cho cuộc họp quan trọng</a></li>


                                <li><a href="#">Việt Nam vào chung kết</a></li>

                                <li><a href="#">U22 Việt Nam thua cuộc</a></li>

                                <li><a href="#">Kim-Un đi tàu bọc thép đến Việt Nam</a></li>


                                <li><a href="#">Mỹ-Nga gia tăng căng thẳng</a></li>


                                <li><a href="#">Mỹ chuẩn bị cho cuộc họp quan trọng</a></li>

                            </ul>

                        </div>
                    </div>
                    <div class="content-detail ">Đúng 8 giờ sáng 26/2, Chủ tịch Đảng Lao động Triều Tiên, Chủ tịch
                        Ủy ban Quốc vụ nước Cộng hòa dân chủ nhân dân Triều Tiên Kim Jong-un đã đến thị trấn biên giới
                        Đồng Đăng, huyện Cao Lộc, tỉnh Lạng Sơn trên đoàn tàu hỏa đặc biệt.</div>
                </div>
                <div class="col-md-3 ">
                    <img src="assets/img/thu-tuong.jpg" alt="" width="100%">
                    <div class="bg-danger text-center text-white">Hệ thống văn bản của ALOV</div>
                    <ul class="van-ban-thu-tuong">
                        <a href="#">
                            <li>thông báo</li>
                        </a>
                        <a href="#">
                            <li>Lời khen của thủ tướng</li>
                        </a>
                        <a href="#">
                            <li>Khen thưởng các đồng chí</li>
                        </a>
                        <a href="#">
                            <li>Mỹ chuẩn bị cho cuộc họp quan trọng</li>
                        </a>
                        <a href="#">
                            <li>Mỹ chuẩn bị cho cuộc họp quan trọng</li>
                        </a>
                        <a href="#">
                            <li>Mỹ chuẩn bị cho cuộc họp quan trọng</li>
                        </a>
                    </ul>
                </div>
            </div>
            <div class="row chinh-tri mt-3">
                <div class="col-md-9 p-0 ">

                    <div class="card">
                        <a href="#">
                            <div class="card-header bg-danger text-center text-white display-4 py-2 ">Hoạt động </div>
                        </a>
                        <div class="card-body">
                            <div class="row">
                                <div class="card-deck">
                                    <div class="card bg-danger py-2">
                                        <a href="#" class="link-card-tinh-than">
                                            <div class="card tinh-than">
                                                <div class="card-header hd-kieuBao text-center">
                                                    Hoạt động
                                                </div>
                                                <div class="card-body">
                                                    <img src="assets/img/a4_vqba.jpg" alt="hoat dong kieu bao"
                                                        width="100%">
                                                </div>
                                                <div class="card-footer text-center">
                                                    Phát quà trẻ nhỏ.
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card bg-danger py-2">
                                        <a href="#" class="link-card-tinh-than">
                                            <div class="card tinh-than">
                                                <div class="card-header hd-kieuBao text-center">
                                                    Sự kiện
                                                </div>
                                                <div class="card-body">
                                                    <img src="assets/img/sukien.jpg" alt="hoat dong kieu bao"
                                                        width="100%">
                                                </div>
                                                <div class="card-footer text-center">
                                                    Các sự kiện nổi bật
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="card bg-danger py-2">
                                        <a href="#" class="link-card-tinh-than">
                                            <div class="card tinh-than">
                                                <div class="card-header hd-kieuBao text-center">
                                                    Đối ngoại
                                                </div>
                                                <div class="card-body">
                                                    <img src="assets/img/doi-ngoai.jpg" alt="hoat dong kieu bao"
                                                        width="100%">
                                                </div>
                                                <div class="card-footer text-center">
                                                    Kí kết nghị định.
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3 ">
                    <div class="card video">
                        <div class="card-header text-center bg-danger py-2 text-white">
                            Video hoạt động
                        </div>
                        <div class="card-body">
                            <div class="container">
                                <div class="row">
                                    <div class="col p-5 text-center text-white">
                                        <a href="#" class="video" data-video="https://www.youtube.com/embed/E67DYKfImF0"
                                            data-toggle="modal" data-target="#videoModal">
                                            <i class="fa fa-play "></i>
                                        </a>

                                    </div>
                                </div>
                            </div>
                            <div class="modal fade" id="videoModal">
                                <div class="modal-dialog ">
                                    <div class="modal-content">
                                        <!-- Modal Header -->
                                        <div class="modal-header">
                                            <h4 class="modal-title">Video</h4>
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        </div>
                                        <!-- Modal body -->
                                        <div class="modal-body">
                                            <iframe src="" height="350px;" width="100%" frameborder="0"
                                                allowfullscreen></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-md-9 p-0 info-chinh-phu">
                    <div class="card">
                        <div class="card-header bg-danger text-center text-white py-2">
                            Chính phủ
                        </div>
                        <div class="card-body " style="background:#f2f2f2">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="title-co-quan-chinh-phu bg-danger text-center text-white">
                                        Chính phủ với các Bộ, Cơ quan Chính phủ
                                    </div>
                                    <div class="img-chinh-phu py-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/img/a4_vqba.jpg" alt="Cac bo, Nghanh" width="100%">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="trich-content">
                                                    Thăm hữu nghị chính thức Việt Nam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="others-link py-3">
                                        <ul>
                                            <li><a href="#"> >Lorem ipsum dolor sit amet.</a></li>
                                            <li><a href="#"> >Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6 ">
                                    <div class="title-co-quan-chinh-phu bg-danger text-center text-white">
                                        Chính phủ với công dân nước ngoài
                                    </div>
                                    <div class="img-chinh-phu py-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/img/chinh-sach.JPG" alt="Cac bo, Nghanh" width="100%">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="trich-content">
                                                    Chính phủ với công dân nước ngoài
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="others-link py-3">
                                        <ul>
                                            <li><a href="#"> >Lorem ipsum dolor sit.</a></li>
                                            <li><a href="#"> >Lorem ipsum dolor sit amet consectetur adipisicing.</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-co-quan-chinh-phu bg-danger text-center text-white">
                                        Chính phủ với doanh nghiệp nước ngoài
                                    </div>
                                    <div class="img-chinh-phu py-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/img/kiu_bao.jpg" alt="Cac bo, Nghanh" width="100%">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="trich-content">
                                                    Thăm hữu nghị chính thức Việt Nam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="others-link py-3">
                                        <ul>
                                            <li><a href="#"> >Kí kết hợp đồng</a></li>
                                            <li><a href="#"> >Lorem ipsum dolor sit.</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="title-co-quan-chinh-phu bg-danger text-center text-white">
                                        Chính phủ tuyên bố các chính sách
                                    </div>
                                    <div class="img-chinh-phu py-3">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <img src="assets/img/a4_vqba.jpg" alt="Cac bo, Nghanh" width="100%">

                                            </div>
                                            <div class="col-md-6">
                                                <div class="trich-content">
                                                    Thăm hữu nghị chính thức Việt Nam.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="others-link py-3">
                                        <ul>
                                            <li><a href="#"> >Lorem ipsum dolor sit amet consectetur.</a></li>
                                            <li><a href="#"> >Lorem, ipsum dolor.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trong-nuoc mt-3">
                        <div class="title-trong-nuoc w-100 clearfix">
                            <a href=""><Span class="tieu-de-trong-nuoc">Trong nước</Span></a>
                            
                            <a href=""><span class="xem-tiep float-right"> >>Xem tiếp</span></a>

                        </div>
                        <div class="content-trong-nuoc">
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <div class="img-nav">
                                        <img src="assets/img/Bac7.jpg" alt="" width="100%">
                                        <div class="title ">Chủ tịch Kim-jong-un đến Việt Nam</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/img/battay.jpg" alt="" width="100%">
                                    <div class="title-nho">
                                        <a href=""><i class="fas fa-video"></i>&nbspDonal-Trump bay tới việt nam</a>
                                    </div>
                                    <div class="mo-ta-chi-tiet">
                                        Vào rạng sáng ngày 26/02/2019 Donal-Trump đã có mặt tại Việt Nam.
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 link-other-trong-nuoc mt-2 ">
                                    <ul>
                                        <li><a href="">Lorem, ipsum dolor.</a></li>
                                        <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                                        <li><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Magnam?</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="trong-nuoc mt-3">
                        <div class="title-trong-nuoc w-100 clearfix">
                            <a href=""><Span class="tieu-de-trong-nuoc">Kiều bào ngoài nước</Span></a>
                           
                            <a href=""><span class="xem-tiep float-right"> >>Xem tiếp</span></a>

                        </div>
                        <div class="content-trong-nuoc">
                            <div class="row mt-2">
                                <div class="col-md-5">
                                    <div class="img-nav">
                                        <img src="assets/img/KB.jpg" alt="" width="100%">
                                        <div class="title ">Chủ tịch Kim-jong-un đến Việt Nam</div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <img src="assets/img/truong-ngoc-anh-va-Kim-Ly-giao-luu-Kieu-bao-dao-Sip-1.JPG"
                                        alt="" width="100%">
                                    <div class="title-nho">
                                        <a href=""><i class="fas fa-video"></i>&nbspDonal-Trump bay tới việt nam</a>
                                    </div>
                                    <div class="mo-ta-chi-tiet">
                                        Vào rạng sáng ngày 26/02/2019 Donal-Trump đã có mặt tại Việt Nam.
                                    </div>
                                </div>
                                <div class="col-md-4 col-12 link-other-trong-nuoc mt-2">
                                    <ul>
                                        <li><a href="">Lorem, ipsum dolor.</a></li>
                                        <li><a href="">Lorem ipsum dolor sit amet.</a></li>
                                        <li><a href="">Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                Magnam?</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tin-doc-nhieu mt-3 ">
                        <div class="header-tin-doc-nhieu ">
                            <span class="btn btn-danger">
                                Tin đọc nhiều nhất.
                            </span>
                            <a href="" style="float:right">>>Xem tiếp</a>
                            <hr style="background:brown">
                        </div>
                        <div class="content-tin-tuc-doc-nhieu">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-3">
                                            <img src="assets/img/5-46.jpg" alt="" width="100%">
                                        </div>
                                        <div class="col-md-9">
                                            <a href="">ipsum dolor sit, amet consectetur adipisicing elit.</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="col-md-3 ">
                    <div class="card ">
                        <div class="card-header bg-danger text-white text-center py-2 thong-cao ">
                            Thông cáo báo chí
                        </div>
                        <div class="card-body thong-cao-bao-chi ">
                            <ul>
                                <li><a href="">Các chính sách cho kiều bào</a></li>
                                <li><a href="">Quyền và nghĩa vũ của kiều bào</a></li>
                            </ul>
                        </div>
                        <div class="card-footer text-right">
                            <a href="">>>xem tiếp</a>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header bg-danger text-white text-center py-2 thong-cao ">
                            Lãnh đạo chỉ đạo
                        </div>
                        <div class="card-body thong-cao-bao-chi ">
                            <ul>
                                <li><a href="">Nâng cao tinh thần dân tộc</a></li>
                                <li><a href="">Lorem ipsum dolor sit.</a></li>
                            </ul>
                        </div>
                        <div class="card-footer text-right">
                            <a href="">>>xem tiếp</a>
                        </div>
                    </div>
                    <div class="card ">
                        <div class="card-header bg-danger text-white text-center py-2 thong-cao ">
                            Kiều bào và chính phủ
                        </div>
                        <div class="card-body thong-cao-bao-chi ">
                            <ul>
                                <li><a href="">Nâng cao tinh thần dân tộc</a></li>
                                <li><a href="">Lorem ipsum dolor sit.</a></li>
                            </ul>
                        </div>
                        <div class="card-footer text-right">
                            <a href="">>>xem tiếp</a>
                        </div>
                    </div>
                    <div class="thong-tin-them">
                        <a href="#"><img src="assets/img/bglt.png" alt="" width="100%"></a>
                    </div>
                    <div class="thong-tin-them">
                        <a href="#"><img src="assets/img/DNCongCP.png" alt="" width="100%"></a>
                    </div>

                </div>
            </div>

        </div>
    </section>
</body>
<footer class="bg-danger text-white">
    <div class="container ">
        <div class="row pt-2">
            <div class="col-md-4 text-left ">
                <h3>Services</h3>
                <p>EPR</p>
                <p>English</p>
                <p>HTML</P>
            </div>
            <div class="col-md-4 text-left ">
                <h3>ALOV</h3>
                <p>Cổng thông tin điện tử</p>
                <p>Hội liên lạc với người Việt Nam ở nước ngoài</p>
            </div>
            <div class="col-md-4 text-left ">
                <h3>Contact</h3>
                <p><i class="fa fa-envelope-open ml-1" aria-hidden="true"></i> Gmail: datnv1997@gmail</p>
                <p><i class="fas fa-phone ml-1 "></i> SDT:0359501670</p>
                <p><i class="fas fa-map-marker-alt"></i> Địa chỉ: 91 Nguyễn Chí Thanh, Hà Nội</p>
            </div>
        </div>
    </div>

</footer>


</html>