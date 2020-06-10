<?php
include "voter_header.php";
include "connection.php";
$select="select * from candidate";
$res=mysqli_query($conn,$select);
?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">VIEW CANDIDATES & VOTE</h1>
<form action="punch_vote.php" method="post">

<table align="center" border="1">
    <tr>
        <th colspan="4">
            <span  style="color:red;" >
    <?php
    if(isset($_REQUEST['er']) && $_REQUEST['er']==1)

    {
        echo "You have already voted.<br> You can't vote Twice";
    }
    ?>
        </span>
        </th>
    </tr>
    <tr>
        <th></th>
        <th>Candidate Name</th>
        <th>Photo</th>
        <th>Controls</th>
    </tr>
<?php
while($row=mysqli_fetch_array($res))
{
    ?>
    <tr>
        <td>
            <input type="radio" name="c_name" value="<?php echo $row[0] ?>">
        </td>
        <td><?php echo $row[1] ?></td>
        <td><img src="<?php echo $row[3] ?>" height="100" width="100"> </td>
        <td><a href="view_details.php?q=<?php echo $row[0] ?>">View More..</a> </td>
    </tr>
    <?php
}
?>
    <tr>
        <td colspan="4" align="right">
            <input type="submit" value="PROCEED TO VOTE">
        </td>
    </tr>

</table>
</form>
            </div>
        </section>
    </section>
<?php
include "footer.html";