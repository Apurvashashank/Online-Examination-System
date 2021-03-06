<html>
<head>
    <link rel='stylesheet' href='js-form-validation.css' type='text/css' />
    <script src="sample-registration-form-validation.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
<style>
    * {box-sizing: border-box;}
    nav {
       overflow: hidden;
       background-color: #330b7c;
       padding: 10px;
    }
    .links {
       font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
       font-weight: bold;
       float: left;
       color:white;
       text-align: center;
       padding: 12px;
       text-decoration: none;
       font-size: 18px;
       line-height: 25px;
       border-radius: 4px;
    }
    nav .logo {
       font-size: 25px;
       font-weight: bold;
    }
    nav .links:hover {
       background-color: rgb(214, 238, 77);
       color: rgb(42, 10, 94);
    }
    nav .selected {
       background-color: dodgerblue;
       color: white;
    }
    .rightSection {
       float: right;
    }
    @media screen and (max-width: 870px) {
       nav .links {
          float: none;
          display: block;
          text-align: left;
       }
       .rightSection {
          float: none;
       }
    }
    </style>
</head>

<body>
    <nav>
        <a class="links logo" href="#"></a>
        <div class="rightSection">
        <a class="links" href="h"></a>
        <a class="links" href="#"></a>
        <a class="links" href="#"></a>
        <a class="links" href="#"></a>
        <a class="links" href="#"></a>
        </nav>
        
<span id="countdown" class="timer"></span>
<script>
var seconds = 06;

function secondPassed() 
{

	var minutes = Math.round((seconds - 30)/60);

	var remainingSeconds = seconds % 60;

	if (remainingSeconds < 10) {

		remainingSeconds = "0" + remainingSeconds;	

	}

	document.getElementById('countdown').innerHTML = minutes + ":" + remainingSeconds;

	if (seconds == 0) 
{

		clearInterval(countdownTimer);

		document.getElementById('countdown').innerHTML = "Time over";
    alert("Your Time Is Over!!!!!!!");
    open("ty.html");

	} else {

		seconds--;  

	}

}
var countdownTimer = setInterval('secondPassed()', 1000);
</script>
            <span class="login100-form-title p-b-70">
			Choose the correct options..
			</span>
    <?php

        $questions_data =$result= "";
        $nameErr=$option1=$option2=$option3=$option4=$answer="";
        define("question_datadb", "question_data");
        define("option1db", "option1");
        define("option2db", "option2");
        define("option3db", "option3");
        define("option4db", "option4");
        define("answerdb", "answer");

    
        $db_connection = pg_connect("host=localhost dbname=postgres user=postgres password=password");
        $select_query= "select question_data,option1,option2,option3,option4,answer from question_bank";

        
        $data = array();
        $result_selected = array();
        //echo $select_query;
        $result = pg_query($db_connection, $select_query);
        echo "<br>";

        $data = pg_fetch_all($result);
        pg_close($db_connection);
    ?>

        <?php  
    
            $d ="";
            $i=1;
            $selected = "";

        foreach($data as $d){ 
        ?>
        <div align="center">
        <form action="" method = 'post'>
	    <tr>
        <b> <?php echo $d[question_datadb]; ?>
        <br> <br> </b>
        <td>
        <input type="radio" name="q1<?php echo $i ?>" id="q1" value ="<?php echo $d[option1db]; ?>">&nbsp <?php echo $d[option1db]; ?></input><br> 
        <br>
        <input type="radio" name="q1<?php echo $i ?>" id="q1" value ="<?php echo $d[option2db]; ?>">&nbsp <?php echo $d[option2db]; ?></input><br>
        <br>
        <input type="radio" name="q1<?php echo $i ?>" id="q1" value ="<?php echo $d[option3db]; ?>">&nbsp <?php echo $d[option3db]; ?></input><br>
        <br> 
        <input type="radio" name="q1<?php echo $i ?>" id="q1" value ="<?php echo $d[option4db]; ?>">&nbsp <?php echo $d[option4db]; ?></input><br>
        <br><br>
        </td>
        
        <!-- <p class="submit">
                        <input type="submit" name="submit" value="submit" />
                    </p>    -->
                    <div class="container-login100-form-btn">
        <p>
                <button  type= "submit" name="submit" class="login100-form-btn">
                     Submit
                </button><br>
            </p>
            </div>
        
        </tr></form>
        </div>
        
        <?php  
        { 
                
            // Check if any option is selected 
            if(isset($_POST["q1".$i]))  
            { 
                $selected = $_POST["q1".$i];
                // Retrieving each selected option  
                echo 'You have selected '.$selected; 
                if($d[answerdb]==$selected){
                    echo "<br> Correct Answer!!";
                }
                else{
                    echo "<br> Wrong Answer!!";
                }
            } 
        }         
            $i++;
            
        }
        if(isset($_POST["submit"]))  
            
        ?>

<!--===============================================================================================-->
<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
</body>
</html>