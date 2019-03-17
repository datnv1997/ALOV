<?php
    include 'kieubaovacp.php';
    include 'tintuc_ngoainuoc.php';
    //xoa_vanban
    $kb=new KieuBao();
    $kb->delete($_POST['id_del_kbcp']);
    //xoa_thongcao
    $tt = new NgoaiNuocTT(); 
    $tt->delete($_POST['id_del_tt_nc']);
?>