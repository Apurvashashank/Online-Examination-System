<html>
<body>

<?php

    $questions_data =$result= "";
    $nameErr=$option1=$option2=$option3=$option4=$answer="";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["question"])) {
           $nameErr = "Question is required";
        }else {
           $questions_data = $_POST["question"];
        }
        if (empty($_POST["option1"])) {
            $nameErr = "option1 is required";
         }else {
            $option1 = $_POST["option1"];
         }
         if (empty($_POST["option2"])) {
            $nameErr = "option2 is required";
         }else {
            $option2 = $_POST["option2"];
         }
         if (empty($_POST["option3"])) {
            $nameErr = "option3 is required";
         }else {
            $option3 = $_POST["option3"];
         }
         if (empty($_POST["option4"])) {
            $nameErr = "option4 is required";
         }else {
            $option4 = $_POST["option4"];
         }
         if (empty($_POST["answer"])) {
            $nameErr = "answer is required";
         }else {
            $answer = $_POST["answer"];
         }
    }
   
    $db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=password");
    $insert_query= "insert into question_bank(question_data,option1,option2,option3,option4,answer) values(";
    $query = $insert_query."'".$questions_data."','".$option1."','".$option2."','".$option3."','".$option4."','".$answer."')";
    
    if(!empty($db_connection)){
      //echo $query;
      $result = pg_query($db_connection, $query);
    }
    pg_close($db_connection);
    if($result)
        header('Location: /ProjectX/dashboard.html');
    else
        echo "Failed!!";


?>
</body>
</html>
