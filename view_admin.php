<?php
include_once "connection.php";
include "admin_header.php";
?>
<?php
$query="select * from admin";
$result=mysqli_query($conn,$query);
?>
    <section class="main__middle__container homepage">
        <section class="main__middle__container">
            <div class="container">
                <h1 align="center">VIEW ADMINS</h1>
<?php
$tab="<table border='1'><th>username</th><th>fullname</th><th>gender</th><th>contactno</th><th>email</th><th>address</th><th>usertype</th><th colspan='2'>controls</th>";
while($row=mysqli_fetch_array($result))
{
    $tab.="<tr>";
    $tab.="<td>$row[0]</td>";

    $tab.="<td>$row[2]</td>";
    $tab.="<td>$row[3]</td>";
    $tab.="<td>$row[5]</td>";
    $tab.="<td>$row[4]</td>";
    $tab.="<td>$row[6]</td>";
    $tab.="<td>$row[7]</td>";
    $tab.="<td><a href='edit_admin.php?username=".$row[0]."'>Edit</a></td>";
    $tab.="<td><a href='delete_admin.php?username=".$row[0]."'>Delete</a></td>";
    $tab.="</tr>";
}
$tab.="</table>";
echo $tab;
?>
                </div>
            </section>
        </section>

<?php
include "footer.html";