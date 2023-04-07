<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
include('connect.php');
include('db.php');


if(isset($_POST['submit'])){

  if(($_POST['user_name'] == "") && ($_POST['pass_word'] == ""))
  {
   echo"Please Fill all fields..";

    header('location:index.php');
  }
  else
  {
    $UserName=$_POST['user_name'];
    $PassWord=$_POST['pass_word'];

    $a="select * from ragistation where User_N = '$UserName' && Pass_W ='$PassWord' ";

    $result=mysqli_query($con,$a);
   $num=mysqli_num_rows($result);

   if($num==1)
    {
      $_SESSION['username'] = $UserName;
      header('location:home.php');
    }
    else
    {
     
        header('location:index.php');
     }

    }
  }
}

?>