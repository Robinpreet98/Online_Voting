
<?php
include_once "connection.php";
include "constituency_header.php";
$query="select * from voter";
$result=mysqli_query($conn,$query);
?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">VIEW VOTERS</h1>

<?php
$tab="<table border='1'>
<th>Sr. No.</th>
<th>adhaar</th><th>election_no</th><th>name</th><th>fathername</th><th>reason</th><th>mobile</th><th>email</th><th>security_pin</th><th>officer_name</th>";
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
    $tab.="<td>$row[5]</td>";
    $tab.="<td>$row[6]</td>";
    $tab.="<td>$row[7]</td>";
    $tab.="<td>$row[8]</td>";

    $select="select off_name from const_login where id=$row[14]";
    $res=mysqli_query($conn,$select);
    $row1=mysqli_fetch_array($res);
    $tab.="<td>$row1[0]</td>";
       $tab.="</tr>";
}
$tab.="</table>";
echo $tab;
?>
            </div>
        </section>
    </section>
<?php include "footer.html";