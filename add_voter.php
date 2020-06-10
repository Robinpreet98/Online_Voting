<body>
<?php include "constituency_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">ADD NEW VOTER</h1>
<form action="action_add_voter.php" method="post">
    <table border="1" align="center">

    <tr>
        <td>adhaar no.</td><td><input type="number" name="tbadhaar">  </td>
    </tr>
    <tr>
        <td>
            election no
        </td>
        <td><input type="text" name="tbelectno">  </td>
    </tr>
    <tr>
        <td>
            name
        </td>
        <td><input type="text" name="tbname">  </td>
    </tr>
    <tr>
        <td>
            father's name
        </td>
        <td><input type="text" name="tbfname">  </td>
    </tr>
    <tr>
        <td>
            reason
        </td>
        <td><textarea rows="5" cols="22" name="tbreason"></textarea>  </td>
    </tr>
    <tr>
        <td>
            mobile no
        </td>
        <td><input type="number" name="tbmobile_no">  </td>
    </tr>
    <tr>
        <td>
            email
        </td>
        <td><input type="email" name="tbemail">  </td>
    </tr>
    <tr>
        <td>
            security pin
        </td>
        <td><input type="text" name="tbs_pin">  </td>
    </tr>
    <tr>
        <td>
            pin1
        </td>
        <td>
            <?php
            $pass="";
            for($i=1;$i<=6;$i++)
            {
                $choice=rand(1,10);
                if($choice>5)
                {
                    $x=rand(48,57);
                }
                else
                {
                    $x=rand(65,90);
                }
                $pass=$pass.chr($x);
            }

            ?>
            <input type="text" name="tbpin1" readonly value="<?php echo $pass ?>">  </td>
    </tr>

        <tr>
            <td>
                officer Name
            </td>
            <td><input type="text" name="tboff_login" readonly value="<?php echo $_SESSION['const'] ?>">  </td>
        </tr>
        <tr>
            <td>
                <?php
                if(isset($_REQUEST['er']) && $_REQUEST['er']==1)
                {
                    echo "Voter already exists";
                }
                ?>
            </td>
            <td ><input type="submit" value="submit"></td>
        </tr>
    </table>
</form>
            </div>
        </section>
    </section>
<?php include "footer.html" ?>
</body>
