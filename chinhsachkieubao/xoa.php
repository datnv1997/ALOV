<?php
    include 'vanban.php';
    include 'thongcao.php';
    //xoa_vanban
    $vanban=new VanBan();
    $vanban->delete($_POST['id']);
    //xoa_thongcao
    $thongcao = new ThongCao(); 
    $thongcao->delete($_POST['id_del_thongcao']);
?>