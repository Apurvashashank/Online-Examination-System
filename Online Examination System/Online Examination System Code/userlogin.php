<!DOCTYPE html>
<html >
<head>
<meta charset="UTF-8">

<title>Material Login Form</title>

<link rel="stylesheet" href="css1/reset.css">

<link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>

<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<link rel="stylesheet" href="css1/style.css">

</head>

<body>

<div class="pen-title">

<h1>USER LOGIN FORM</H1>

</div>
<div class="rerun">

<a href="">Rerun Pen</a></div>
<div class="container">


<div class="card"></div>
<div class="card">

<h1 class="title">Login</h1>

<form name="lc" method="Post" action="userlogin.php">
<div class="input-container">


<input type="text"  name="u1" id="u1" required="required"/>


<label for="Username">Username</label>
<div class="bar"></div>


</div>
<div class="input-container">


<input type="password"  name="p1" id="p1" required="required"/>

<label for="Password">Password</label>

<div class="bar"></div>
</div>
<div class="button-container">


<button ><span>Go</span></button>
</div>

<div class="footer"><a href="#">Forgot your password?</a></div>
</form>

</div>
<div class="card alt">

<div class="toggle"></div>
<h1 class="title">Register
<div class="close"></div>
</h1>


<form>
<div class="input-container">
<input type="text" id="Username" required="required"/>

<label for="Username">Username</label>
<div class="bar"></div>
</div>


<div class="input-container">
<input type="password" id="Password" required="required"/>


<label for="Password">Password</label>
<div class="bar"></div>
</div>


<div class="input-container">
<input type="password" id="Repeat Password" required="required"/>


<label for="Repeat Password">Repeat Password</label>
<div class="bar"></div>
</div>


<div class="button-container">
<button><span>Next</span></button>
</div>
</form>


</div>
</div>
<!-- Portfolio--><a id="portfolio" href="http://andytran.me/" title="View my portfolio!">

<i class="fa fa-link"></i></a>
<!-- CodePen--><a id="codepen" href="http://codepen.io/andytran/" title="Follow me!">

<i class="fa fa-codepen"></i></a>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

<script src="js1/index.js"></script>


</body>
</html>
