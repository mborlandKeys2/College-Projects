<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DIY Forum Index</title>

<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" href="css/custom.css">
    
</head>

<body>
    <!-- Navigation Bar -->  
  <?php include("../resources/nav_bar.php");?>


    <!-- Main Content -->
    <div class="container">
        <div class= "below_menu_container col-lg-12">
        <img src="images/undercontruction.png" alt="Page Under Construction Image ">  
       </div>

    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">
    <h1><u>General Interest Section for DIY Topics</u></h1>
    <div class="col-lg-2"> 
<textarea  rows="2" cols="60" placeholder=" Post on DIY Forum."></textarea>
</div>
	<hr>
        <?php include("../resources/footer.php");?>

</div>
</div>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>