<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ALOV</title>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css"
        integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="assets/scss/kinhte-xahoi.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>

</head>

<body>
    <section id="header">
        <div class="over-lay">
            <div class="background "
                style="background:url('assets/img/banner.jpg');background-repeat: no-repeat;background-size: cover">
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
        <nav class="navbar navbar-expand-md bg-danger navbar-dark ">
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
                                <a class="dropdown-item text-white" href="thongcao-baochi.php">Thống cáo với báo
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
                    <input type="text" class="form-control" placeholder="Tên đăng nhập">
                    <input type="password" class="form-control mt-3" placeholder="Mật khẩu">
                    <a href="quantri.php" style="text-decoration:none;"><button type="button"
                            class="form-control bg-danger text-white mt-3">Đăng
                            nhập</button></a>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>
    <section id="content">
        <div class="container">
            <div class="row mt-3">
                <div class="col-md-9">
                    <div class="row major">
                        <div class="col-md-7">
                            <img src="assets/img/sukien.jpg" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-md-5">
                            <h3><a href="">Việt Nam đang là 1 trong số nước đang phát triến</a></h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa libero cupiditate
                                reprehenderit eveniet reiciendis laborum id excepturi, et tenetur iste.</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row tintuc-phu">
                        <div class="col-md-5">
                            <img src="assets/img/chinh-sach.JPG" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h3><a href="">Đời sống nhân dân Việt Nam đang ấm no</a></h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis temporibus, dicta
                                earum atque ut autem.</p>
                        </div>
                    </div>
                    <div class="row tintuc-phu">
                        <div class="col-md-5">
                            <img src="assets/img/chinh-sach.JPG" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h3><a href="">Đời sống nhân dân Việt Nam đang ấm no</a></h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis temporibus, dicta
                                earum atque ut autem.</p>
                        </div>
                    </div>
                    <div class="row tintuc-phu">
                        <div class="col-md-5">
                            <img src="assets/img/chinh-sach.JPG" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h3><a href="">Đời sống nhân dân Việt Nam đang ấm no</a></h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis temporibus, dicta
                                earum atque ut autem.</p>
                        </div>
                    </div>
                    <div class="row tintuc-phu">
                        <div class="col-md-5">
                            <img src="assets/img/chinh-sach.JPG" alt="" class="w-100 img-fluid">
                        </div>
                        <div class="col-md-7">
                            <h3><a href="">Đời sống nhân dân Việt Nam đang ấm no</a></h3>
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Reiciendis temporibus, dicta
                                earum atque ut autem.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 others-info">
                    <div class="card ">
                        <div class="card-header bg-danger text-white text-center py-2 thong-cao ">
                            Thông cáo báo chí
                        </div>
                        <div class="card-body thong-cao-bao-chi ">
                            <ul>
                                <li><a href="">Các chính sách cho kiều bào</a></li>
                                <li><a href="">Quyền và nghĩa vũ kiều bào</a></li>
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
<footer class="bg-danger text-white mt-4">
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