<?php

include_once ($_SERVER['DOCUMENT_ROOT'].'/ALOV/config/ketnoi.php');
$ketnoi = new KetNoi();

class VanBan
{
    public function show()
    {
        $sql="select * from vanban";
        $st=$GLOBALS['ketnoi']->exe($sql);
        //viết table
        echo "<table class='table-bordered w-100 text-center bg-danger text-white bang'>";
        echo "<thead class='bg-info mb-2'>";
        echo "<tr class='theader'>";
        echo "<th>Văn bản số</th>";
        echo "<th>Chủ đề</th>";
        echo "<th>Ngày phát hành</th>";
        echo "<th>Xem chi tiết</th>";
        echo "<th>Thao tác</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $st->fetch()) {
            $id=$row['id'];
            $link=$row['link'];
            echo "<tr id=$id>";
            echo "<td>".$id."</td>";
            echo "<td id='ten_vb$id'>".$row['ten_vanban']."</td>";
            echo "<td id='date$id'>".$row['Date']."</td>";
            echo "<td id='link$id'><a href=$link> >>Xem chi tiết</a></td>";
            echo "<td>
                    <i class='fas fa-trash icon-xoa' id=$id>&nbsp</i>
                    <i class='fas fa-edit icon-edit' id=$id>&nbsp</i>
                    <i class='fas fa-check-circle icon-ok' id=$id>&nbsp</i>
                </td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
    public function delete($id)
    {
        $sql="delete from vanban where id='".$id."'";
        $GLOBALS['ketnoi']->exe($sql);
    }
    function edit($ten_vanban,$ngay,$link){
        $sql="UPDATE vanban SET ten_vanban='".$ten_vanban."'".", Date='".$ngay."', link='".$link."' WHERE id=4";
    }
    function showFront(){
        $sql="select * from vanban";
        $st=$GLOBALS['ketnoi']->exe($sql);
        //viết table
        echo "<table class='table-bordered w-100 text-center bg-danger text-white bang'>";
        echo "<thead class='bg-info mb-2'>";
        echo "<tr class='theader'>";
        echo "<th>Văn bản số</th>";
        echo "<th>Chủ đề</th>";
        echo "<th>Ngày phát hành</th>";
        echo "<th>Xem chi tiết</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";
        while ($row = $st->fetch()) {
            $id=$row['id'];
            $link=$row['link'];
            echo "<tr id=$id>";
            echo "<td>".$id."</td>";
            echo "<td id='ten_vb$id'>".$row['ten_vanban']."</td>";
            echo "<td id='date$id'>".$row['Date']."</td>";
            echo "<td id='link$id'><a href=$link> >>Xem chi tiết</a></td>";
          
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
    }
}

?>