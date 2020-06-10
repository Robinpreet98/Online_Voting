<?php
if(isset($_REQUEST["q"]))
{
    include_once("connection.php");
    $id = $_REQUEST["q"];
    $query="select * from const_login WHERE id=$id";
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $email=$row[2];
    $off_name=$row[3];
    $mob_no=$row[4];
}
?>

<body>
<?php include "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">EDIT CONST LOGIN</h1>
<form action="update_const_login.php" method="post">
    <table border="1" align="center">
      <tr>
            <td>email</td>
            <td><input type="email" name="tbemail" value="<?php echo $email ?>" required></td>
        </tr>
        <tr>
            <td>officer name</td>
            <td><input type="text" name="tboff_name" value="<?php echo $off_name ?>" required></td>
        </tr>
        <tr>
            <td>mobile no</td>
            <td><input type="number" name="tbmob_no" value="<?php echo $mob_no ?>" required></td>
        </tr>

       <tr>
           <td colspan="2" align="center"><input type="submit" value="Update"></td>
        </tr>
    </table>
</form>
</div>
        </section>
    </section>
<?php include "footer.html" ?>
</body>
