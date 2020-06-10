<?php
include_once "connection.php";
$query="select * from signup";
$result=mysqli_query($conn,$query);
$tab="<table border='1'><th>email</th><th>first_name</th><th>last_name</th><th>mobileno</th><th>address</th><th>country</th>";
while($row=mysqli_fetch_array($result))
{
    $tab.="<tr>";
    $tab.="<td>$row[0]</td>";
    $tab.="<td>$row[2]</td>";
    $tab.="<td>$row[3]</td>";
    $tab.="<td>$row[4]</td>";
    $tab.="<td>$row[5]</td>";
    $tab.="<td>$row[6]</td>";
    $tab.="</tr>";
}
$tab.="</table>";
echo $tab;