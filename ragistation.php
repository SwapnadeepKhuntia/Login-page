<?php
   session_start();
   include('db.php');
   header('location:index.php');
  
   if(isset($_POST['submit'])){

      if(($_POST['user_name'] == "") || ($_POST['pass_word'] == ""))
      {
        // echo"<small>Please Fill all fields..</small><hr>";
        

        
      }
      else
      {
       $UserName=$_POST['user_name'];
       $PassWord=$_POST['pass_word'];

       $a="select * from  ragistation where User_N = '$UserName'";

       $result=mysqli_query($con,$a);
       $num=mysqli_num_rows($result);

      if($num==1)
       {
         
          echo"This email is alrady register";
       }
       else
       {
       $mmm="insert into ragistation(User_N,Pass_W) values ('$UserName','$PassWord')";
       mysqli_query($con,$mmm);
        }

      }
      }
      
   mysqli_close();
?>