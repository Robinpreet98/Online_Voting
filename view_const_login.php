<?php
include_once "connection.php";
include "admin_header.php";
?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">VIEW CONSTITUENCY LOGINS</h1>
<?php

$query="select * from const_login";
$result=mysqli_query($conn,$query);
$tab="<table border='1' align='center'><th>Email</th><th>Officer Name</th><th>Mobile no</th><th  colspan='2'>Controls</th>";
while($row=mysqli_fetch_array($result))
{
    $tab.="<tr>";
    $tab.="<td>$row[2]</td>";
    $tab.="<td>$row[3]</td>";
    $tab.="<td>$row[4]</td>";
 //   $tab.="<td>$row[5]</td>";
    $tab.="<td><a href='edit_const_login.php?q=$row[0]'>Edit</a> </td>";
    $tab.="<td><a href='delete_const_login.php?q=$row[0]'>Delete</a> </td>";
       $tab.="</tr>";
}
$tab.="</table>";
echo $tab;
?>
            </div>
        </section>
    </section>
<?php  include "footer.html";
