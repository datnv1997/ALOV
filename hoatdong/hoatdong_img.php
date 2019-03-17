<?php
include_once '../config/ketnoi.php';
$ketnoi = new KetNoi();
class HdImg{
    function show(){
        $sql="select * from hoatdong_hinhanh";
        $st=$GLOBALS['ketnoi']->exe($sql);
        //viết table
        echo "<table class='table-bordered w-100 text-center bg-danger text-white bang'>";
            echo "<thead class='bg-info mb-2'>";
                echo "<tr class='theader'>";
                    echo "<th>ID</th>";
                    echo "<th>Tiêu đề</th>";
                    echo "<th>Đường dẫn ảnh</th>";
                    echo "<th>Thao tác</th>";
                echo "</tr>";
            echo "</thead>";    
            echo "<tbody>";
                while($row = $st->fetch()) {
                                $id=$row['id'];
                                echo "<tr id=$id>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$row['title']."</td>";
                                echo "<td>".$row['src-img']."</td>";
                                echo    "<td>
                                            <i class='fas fa-trash icon-xoa-hdimg' id=$id>&nbsp</i>
                                            <i class='fas fa-edit icon-edit' id=$id>&nbsp</i><i
                                            class='fas fa-check-circle icon-ok' id=$id>&nbsp</i>
                                        </td>";
                                echo "</tr>";
                                
                            }
            echo "</tbody>";
        echo "</table>";
    }
    function delete($id){
        $sql="delete from hoatdong_hinhanh where id='".$id."'";
        $GLOBALS['ketnoi']->exe($sql);
        
    }
}
?>