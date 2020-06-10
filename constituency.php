<body>
<?php include "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">ADD NEW CONSTITUENCY</h1>
<form action="action_constituency.php" method="post" >
<table border="1" align="center">

    <tr>
        <td>const_name</td>
        <td><input type="text" name="tbconst_name" required></td>
    </tr>
    <tr>
        <td>population</td>
        <td><input type="number" name="tbpopulation" required></td>
    </tr>
    <tr>
        <td>wards</td>
        <td><input type="text" name="tbwards" required></td>
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
                echo "Constituency name already exists";
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
<?php include "footer.html"; ?>
</body>

