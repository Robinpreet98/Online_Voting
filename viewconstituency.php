<?php
include_once "connection.php";
include "admin_header.php";


$query="select * from constituency";
$result=mysqli_query($conn,$query);
?>
    <section class="main__middle__container homepage">
        <section class="main__middle__container">
            <div class="container">
                <h1 align="center">VIEW CONSTITUENCIES</h1>
<?php
$tab="<table border='1' align='center'><th> Sr. No. </th><th>Constituency Name</th><th>Population</th><th>Wards</th><th>State</th><th  colspan='4'>Controls</th>";
$count=0;
while($row=mysqli_fetch_array($result))
{
    $count++;
    $tab.="<tr>";
    $tab.="<td>$count</td>";
    $tab.="<td>$row[1]</td>";
    $tab.="<td>$row[2]</td>";
    $tab.="<td>$row[3]</td>";
    $tab.="<td>$row[4]</td>";
    $tab.="<td><a href='edit_constituency.php?q=$row[0]'>Edit</a> </td>";
    $tab.="<td><a href='delete_constituency.php?q=$row[0]'>Delete</a> </td>";
    $tab.="<td><a href='const_login.php?q=$row[0]'>Add Constituency Login</a> </td>";
    $tab.="<td><a href='view_const_login.php?q=$row[0]'>View Constituency Login</a> </td>";
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