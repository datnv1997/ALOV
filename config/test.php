
<?php

include '../../../../models/config/ketnoi.php';
$ketnoi= new KetNoi();
$sql="select * from vanban";
$stmt=$ketnoi->PrepareSql($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
$stmt->execute();
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
                    while($row = $stmt->fetch()) {
                                    $link=$row['link'];
                                    echo "<tr>";
                                    echo "<td>".$row['id']."</td>";
                                    echo "<td>".$row['ten_vanban']."</td>";
                                    echo "<td>".$row['Date']."</td>";
                                    echo "<td><a href=$link> >>Xem chi tiết</a></td>";
                                    echo "<td><i class='fas fa-trash'>&nbsp</i><i class='fas fa-edit'>&nbsp</i><i
                                            class='fas fa-check-circle'>&nbsp</i></td>";
                                    echo "</tr>";
                                }
                echo "</tbody>";
            echo "</table>";
?>
