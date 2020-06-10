<?php
include "public_header.php";
?>

<body>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">VOTER LOGIN</h1>
<form action="action_voter_login.php" method="post">
    <table border="1" align="center">
        <tr>
            <td>Adhaar No</td>
            <td>
                <input type="text" name="tbadhaar" required>
            </td>
        </tr>
        <tr>
            <td>Secret Pin </td>
            <td>
                <input type="password" name="tbsecret_pin" required>
            </td>
        </tr>
               <tr>
            <td colspan="2">
                <?php
                if(isset($_REQUEST["msg"]))
                {
                    echo $_REQUEST["msg"];
                }
                ?>
            </td>
        </tr>
        <tr>
            <td>
                <?php
                if(isset($_REQUEST['er']) && $_REQUEST['er']==1)
                {
                    echo "Invalid Credentials";
                }
                ?>
            </td>
            <td>
                <input type="submit" value="Login">
            </td>
        </tr>
    </table>
</form>
            </div>
        </section>
    </section>
<?php include "footer.html" ?>
</body>
