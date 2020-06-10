<head>
    <script type="text/javascript">
        function form_validate()
        {
            var old_password=document.getElementById("tbopassword").value;
            var new_password= document.getElementById("tbnpassword").value;
            var con_password= document.getElementById("tbcpassword").value;

            alert(new_password);
            alert(con_password);
            var flag=true;
            if (new_password == con_password)
            {
                flag = true;
            }
            else
            {
                document.getElementById("sp1").innerHTML="new Password and confirm new password not match ";
                flag=false;
            }
            alert(flag);
            return flag;
        }
    </script>
</head>
<body>
<?php include_once "admin_header.php" ?>
<section class="main__middle__container homepage">
    <section class="main__middle__container">
        <div class="container">
            <h1 align="center">CHANGE PASSWORD</h1>
<form action="actionchangepassword_admin.php" method="post" onsubmit="return form_validate()">


    <table align="center" border="1">

        <tr>
            <td>Username</td>
            <td>
               <input type="text" name="tbusername" readonly value="<?php echo $username ?>" required="">
            </td>
        </tr>
        <tr>
           <td>Old Password</td>
            <td>
               <input type="password" name="tbopassword" required="">
            </td>
        </tr>
        <tr>


            <td>New Password</td>
            <td>


                <input type="password" name="tbnpassword" id="tbnpassword" required="">
            </td>
        </tr>
        <tr>


            <td>Confirm New Password</td>
            <td>


                <input type="password" name="tbcpassword" id="tbcpassword" required="">
            </td>
        </tr>
        <tr>

            <td colspan="2">
<span id="sp1">


</span>
                <?php
                if(isset($_REQUEST["er"]))
                {
                    if($_REQUEST['er']==1)
                    {
                        echo "User name or Old Password not matched";
                    }
                    elseif($_REQUEST['er']==2)
                    {
                        echo "New Password and Confirm Password not matched";
                    }
                }
                ?>
            </td>
        </tr>
        <tr>

            <td colspan="20" align="center">

                <input type="submit" value="Change">
            </td>
        </tr>
    </table>
</form>
</div>
        </section>
    </section>
<?php include "footer.html" ?>
</body>



