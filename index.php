
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script>
        //student alert
         student = () =>
        {
            let user=document.getElementById('user').value
            let password=document.getElementById('password').value

             if(user=="" || password=="" )
             {
                 alert('Full Fill the Student Login')
             }
        }
       //admin alert
        admin = () =>
        {
            let user=document.getElementById('us').value
            let password=document.getElementById('pass').value

             if(user=="" || password=="" )
             {
                 alert('Full Fill the Admin Login')
             }
        }

    </script>
</head>
<body>



    <form method="post" action="ragistation.php">
         <h1>Ragistation</h1>
         <label>User Name</label>
         <input type="text"  placeholder="user name" name="user_name" id="user">
         <label>Pass Word</label>
         <input type="password" placeholder="password" name="pass_word" id="password" >

         <button type="submit" name="submit" onclick="student()">ragistation</button>
         <br>


   </form>
   <form method="post" action="login.php">
         <h1>login</h1>
         <label>User Name</label>
         <input type="text"  placeholder="user name" name="user_name" id="us">
         <label>Pass Word</label>
         <input type="password" placeholder="password" name="pass_word" id="pass" >
         <button type="submit" name="submit" onclick="admin()">Login</button>
         <br>
         


   </form>
</body>
</html>