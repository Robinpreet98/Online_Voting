<?php
include_once("connection.php");
$cname = $_REQUEST['tbcname'];
$fname = $_REQUEST['tbfname'];

$temp_candi=$_FILES["tbcphoto"]["tmp_name"];
$candi_name=$_FILES["tbcphoto"]["name"];



$cand_path="images/candidate/".$candi_name;

echo "filename".$candi_name, "<br>";
echo "tempfile". $temp_candi;
if(move_uploaded_file($temp_candi,$cand_path))
{
    echo "file upload";
}

else
{
    header('location:candidate.php?msg=only jpg or png file should be upload');
}



$email = $_REQUEST["tbemail"];
$mob = $_REQUEST["tbmob"];
$haddress = $_REQUEST["tbhaddress"];
$oaddress = $_REQUEST["tboaddress"];

$tempfile=$_FILES["tbpphoto"]["tmp_name"];
$filename=$_FILES["tbpphoto"]["name"];

$path="images/party/".$filename;
echo "filename".$filename, "<br>";
echo "tempfile". $tempfile;
if(move_uploaded_file($tempfile,$path))
{
    echo "file upload";
}


$party = $_REQUEST["tbparty"];
$const = $_REQUEST["tbconst"];
$state = $_REQUEST["tbstate"];

$select = "select * from candidate";
$result = mysqli_query($conn, $select);
$flag = false;
while ($row = mysqli_fetch_array($result))
{
    if ($row[4] == $email)
    {
        $flag = true;
        break;
    }
}

if ($flag==true)
{
    header('location:candidate.php?er=1b');
}
else
{
    $query="insert into candidate VALUES (null,'".$cname."','".$fname."','".$cand_path."','".$email."','".$mob."','".$haddress."','".$oaddress."','".$path."','".$party."','".$const."','".$state."',0)";
    if (mysqli_query($conn, $query)) {
        header('location:confirm_candidate.php');

    }

}
?>