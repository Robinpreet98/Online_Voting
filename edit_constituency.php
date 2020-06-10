<?php

    include_once("connection.php");
    $const_id = $_REQUEST["q"];
    $query="select * from constituency WHERE const_id=$const_id";
    $result=mysqli_query($conn,$query);
    $row = mysqli_fetch_array($result);
    $const_name=$row[1];
    $population=$row[2];
    $wards=$row[3];
    $state=$row[4];

?>

<body>
<?php include "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">EDIT CONSTITUENCY</h1>
<form action="update_constituency.php" method="post">
       <table border="1" align="center">
           <tr>
               <td>const_name</td>
               <td><input type="text" name="tbconst_name" value="<?php echo $const_name ?>" required></td>
           </tr>
           <tr>
               <td>population</td>
               <td><input type="number" name="tbpopulation" value="<?php echo $population ?>" required></td>
           </tr>
           <tr>
               <td>wards</td>
               <td><input type="text" name="tbwards" value="<?php echo $wards ?>" required></td>
           </tr>
           <tr>
               <td>state</td>
               <td>
                   <select name="tbstate" required>
                       <?php
                       $arr=array("Andhra Pradesh","Arunachal Pradesh","Assam","Bihar","Chhattisgarh","Goa","Gujarat","Haryana","Himachal Pradesh","Jammu and Kashmir","Jharkhand","Karnataka","Kerala","Madhya Pradesh","Maharashtra","Manipur","Meghalaya","Mizoram","Nagaland","Orissa","Punjab","Rajasthan","Sikkim","Tamil Nadu","Tripura","Uttaranchal","Uttar Pradesh","West Bengal");
                       for($i=0;$i<count($arr);$i++)
                       {
                            if($state == $arr[$i])
                            {
                                ?>
                                <option value="<?php echo $arr[$i] ?>" selected><?php echo $arr[$i] ?></option>
                                <?php
                            }
                           else
                           {
                               ?>
                               <option value="<?php echo $arr[$i] ?>"><?php echo $arr[$i] ?></option>
                               <?php
                           }
                           ?>

                       <?php
                       }
                       ?>

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
<?php include "footer.html" ?>
</body>

