<html>
<body>

<?php

    $emailErr = $passErr =  "";
    $email = $password ="";
    $email_db = $username_db = $usertype_db ="";
    define("emaildb", "email");
    define("usernamedb", "username");
    define("usertypedb", "usertype");
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
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
    $insert_query= "select username , email, usertype from users where email=";
    $query = $insert_query."'".$email."' and password='".$password."'";
    
    
    //echo $query;
    $result = pg_query($db_connection, $query);
    echo "<br>";
    
    $myrow = pg_fetch_assoc($result); 
    $username_db = $myrow[usernamedb];
    $email_db = $myrow[emaildb];
    $usertype_db =$myrow[usertypedb];

    pg_close($db_connection);
    if($email_db==$email){
        if($usertype_db=='S'){
            header('Location: /ProjectX/userinfo.html');
        }
        else{
            header('Location: /ProjectX/dashboard.html');
        }
    } 
    else
        echo "Login failed!!";
    

?>
</body>
</html>