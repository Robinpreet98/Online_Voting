<?php
include "voter_header.php";
?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
        <h1 align="center">VALIDATE OTP</h1>
<form action="valid_pin1_action.php" method="post">
    <span style="float: right;">Adhaar No : <?php echo $_SESSION['adhaar'] ?></span>
    <table align="center" border="1">
        <tr>
            <th>Enter Pin 1 :</th>
            <th>
                <input type="text" name="pin1" required>
            </th>
        </tr>
        <tr>
            <th>
                <?php
                if(isset($_REQUEST['er']) && $_REQUEST['er']==1)
                {
                    echo "Invalid Pin1";
                }
                ?>
            </th>
            <th>
                <input type="submit" value="PROCEED">
            </th>
        </tr>

    </table>
</form>
            </div>
        </section>
    </section>
<?php
include "footer.html";
