<?php
/*
1.收到topic
2.使用dbtool素搜尋topic
3.將結果傳給min_topc.html

require_once("dbtools.inc.php");
$link = create_connection() or die("connecting fails!");

//$sort = $_GET["sort"];
//$sql="SELECT * FROM candidate WHERE sort='$sort'";
$result=execute_sql($link,"yuyun",$sql);

echo "<table border='1' align='center'>
     <tr bgcolor='#32CD32'><td>食品照片</td><td>食品分類</td><td>食品名稱</td><td>食品價格</td><td>購買數量</td><td></td></tr>";
while($row=mysqli_fetch_assoc($result)){
    echo "<form method='post' action='add_to_car.php?product_sort=".$row["product_sort"]."&product_name=".$row["product_name"]."&price=".$row["price"]."'>".
        "<tr bgcolor='#00FA9A'>".
        "<td><img src='./網頁圖/商品圖/$row[product_name_english].jpg' width='70'></td>".
        "<td>".$row['product_sort']."</td>".
        "<td>".$row['product_name']."</td>".
        "<td>".$row['price']."</td>".
        "<td><input type='number' name='quantity' value='1' size='5' min='1' max='10'> </td>".
        "<td><input type='submit' name='' value='下單'> </td>".
        "<br>".
        "</tr></form>";
}
echo "</table>";
mysqli_free_result($result);
mysqli_close($link);

return $_GET['value'];
echo “<script>alert($_GET['value'])</script>”;
*/

$c = $_GET['value']
echo “<script>alert($c)</script>”;
?>