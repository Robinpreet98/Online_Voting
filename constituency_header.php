<?php
session_start();
if(isset($_SESSION['const']))
{

}
else
{
    header("location:constituency_login.php");
}
?>

<head>
    <title>eVote</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>

</head>
<header class="main__header">
    <div class="container">
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="navbar-header">
                <h1 class="navbar-brand">eVote</h1>
                <a href="#" class="submenu">Menus</a> </div>
            <div class="menuBar">
                <ul class="menu">
                    <li class="active"><a href="constituency_home.php">Home</a></li>
                    <li><a href="add_voter.php">Add Voter</a></li>
                    <li><a href="view_add_voter.php">View Voters</a></li>
                    <li><a href="logout_const.php">Logout</a></li>

                    <li><a style="font-size: x-large;">
                            <span style="float: right;">
        <?php
        include "connection.php";
        $officer ="select off_name from const_login where email='".$_SESSION['const']."'";
        $res_off=mysqli_query($conn,$officer);
        $row_off=mysqli_fetch_array($res_off);
        ?>
                                Logged In as : <?php echo $row_off[0] ?>
    </span></a>
                        </li>
                </ul>
            </div>

        </nav>
    </div>
</header>
<section class="slider">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <div class="carousel-inner">
            <div class="item"> <img data-src="images/slider/image_1920x1000.jpg" alt="first slide" src="images/slider/1.jpg">

            </div>
            <div class="item"> <img data-src="images/slider/image_1920x1000.jpg" alt="second slide" src="images/slider/2.png">

            </div>
            <div class="item active"> <img data-src="images/slider/image_1920x1000.jpg" alt="third slide" src="images/slider/Indian_Flag1.jpg">

            </div>
        </div>
        <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon carousel-control-left"></span></a> <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon carousel-control-right"></span></a> </div>
</section>
