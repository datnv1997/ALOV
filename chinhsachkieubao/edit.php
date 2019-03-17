<?php
    include_once 'vanban.php';
    $vanban = new VanBan();

    $ten_vanban=$_POST['ten_vanban'];
    $date=$_POST['date'];
    $link=$_post['link'];
    $vanban->edit($ten_vanban,$date,$link);

?>