<body>
<?php include "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">ADD NEW CANDIDATES</h1>
<form action="action_candidate.php" method="post" enctype="multipart/form-data">
    <table border="1" align="center">
        <tr>
            <td>cname</td>
            <td><input type="text" name="tbcname" required></td>
        </tr>
        <tr>
            <td>fname</td>
            <td><input type="text" name="tbfname" required></td>
        </tr>
        <tr>
            <td>cphoto</td>
            <td><input type="file" name="tbcphoto" required></td>
        </tr>
        <tr>
            <td>email</td>
            <td><input type="email" name="tbemail" required></td>
        </tr>
        <tr>
            <td>mob</td>
            <td><input type="text" name="tbmob" required></td>
        </tr>
        <tr>
            <td>haddress</td><td><textarea rows="2"cols="22" name="tbhaddress"></textarea> </td>
        </tr>
        <tr>
            <td>oaddress</td><td><textarea rows="2"cols="22" name="tboaddress"></textarea> </td>
        </tr>
        <tr>
            <td>pphoto</td>
            <td><input type="file" name="tbpphoto" required></td>
        </tr>
        <tr>
            <td>party</td>
            <td><input type="text" name="tbparty" required></td>
        </tr>
        <tr>
         <td>const</td>
            <td><select name="tbconst" required>
                <option value="">---Select---</option>
                    <?php
                    include "connection.php";
                    $select="select * from constituency";
                    $res=mysqli_query($conn,$select);
                    while($row=mysqli_fetch_array($res))
                    {
                        ?>
                        <option value="<?php echo $row[0] ?>"><?php echo $row[1] ?> (<?php echo $row[4] ?>)</option>
                    <?php
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>state</td>
            <td>
                <select name="tbstate" required>
                    <option value="">---Select---</option>
                    <option value="Andhra Pradesh">Andhra Pradesh</option>
                    <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                    <option value="Assam">Assam</option>
                    <option value="Bihar"> Bihar</option>
                    <option value="Chhattisgarh">Chhattisgarh</option>
                    <option value="Delhi">Delhi</option>
                    <option value="Goa">Goa </option>
                    <option value="Gujarat">Gujarat </option>
                    <option value="Haryana">Haryana </option>
                    <option value="Himachal Pradesh">Himachal Pradesh </option>
                    <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                    <option value="Jharkhand">Jharkhand</option>
                    <option value="Karnataka">Karnataka</option>
                    <option value="Kerala">Kerala</option>
                    <option value="Madya Pradesh">Madya Pradesh</option>
                    <option value="Maharashtra">Maharashtra</option>
                    <option value="Manipur">Manipur</option>
                    <option value=" Meghalaya">Meghalaya</option>
                    <option value=" Mizoram">Mizoram</option>
                    <option value=" Nagaland">Nagaland</option>
                    <option value="Orissa">Orissa</option>
                    <option value="Punjab">Punjab</option>
                    <option value="Rajasthan">Rajasthan</option>
                    <option value="Sikkim">Sikkim</option>
                    <option value="Tamil Nadu">Tamil Nadu</option>
                    <option value="Tripura">Tripura</option>
                    <option value="Uttaranchal">Uttaranchal</option>
                    <option value="Uttar Pradesh">Uttar Pradesh</option>
                    <option value="West Bengal">West Bengal</option>
                </select> </td>
        </tr>

        <tr>
            <td>
                <?php
                if(isset($_REQUEST['er']) && $_REQUEST['er']==1)
                {
                    echo "Candidate email already exists";
                }

                ?>
            </td>
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
</form>
            </div>
        </section>
    </section>
            <?php
            include "footer.html"
            ?>
</body>

