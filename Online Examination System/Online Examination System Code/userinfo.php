<html>
<head>
    <link rel='stylesheet' href='js-form-validation.css' type='text/css' />
    <script src="sample-registration-form-validation.js"></script>

</head>

<body>

<?php
if (isset($_POST['submit'])) {
if(isset($_POST['radio']))
{
echo "You have selected :".$_POST['radio'];  //  Displaying Selected Value
}
?>


</body>

</html>