<?php
    include 'trongnuoc-kinhte.php';
    //xóa bảng kinh tế trong nước
    $kinhte=new KinhTe();
    $kinhte->delete($_POST['id_del_kinhte']);
   //xoa
?>