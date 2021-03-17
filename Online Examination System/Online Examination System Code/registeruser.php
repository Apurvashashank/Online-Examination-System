<html>
<body>

<?php

    $nameErr = $emailErr = $passErr =  "";
    $username = $email = $password ="";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["usernamesignup"])) {
           $nameErr = "Name is required";
        }else {
           $username = $_POST["usernamesignup"];
        }
        
        if (empty($_POST["emailsignup"])) {
           $emailErr = "Email is required";
        }else {
           $email = $_POST["emailsignup"];
           
           // check if e-mail address is well-formed
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
              $emailErr = "Invalid email format"; 
           }
        }
        if (empty($_POST["passwordsignup"])) {
         $passErr = "Password is required";
      }else {
         $password = $_POST["passwordsignup"];
      }
    }
    $db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=password");
    $insert_query= "insert into users(username,email,password,usertype) values(";
    $query = $insert_query."'".$username."','".$email."','".$password."','S')";
    
    if(!empty($db_connection)){
      echo $query;
      $result = pg_query($db_connection, $query);
    }
    pg_close($db_connection);
?>
</body>
</html>
