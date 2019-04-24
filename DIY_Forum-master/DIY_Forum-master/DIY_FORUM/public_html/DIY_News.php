<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>DIY News</title>
<!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

	<link rel="stylesheet" type="text/css" href="css/custom.css">
    
</head>

<body>
    <!-- Navigation Bar -->  
  <?php include("../resources/nav_bar.php");?>
<!-- Main Content -->
    <div class="container">
    
        <!-- Container found below menu bar -->
        <div class="below_menu_container">	
<h1>DIY Forum News &amp; Stories</h1>

<div class = "articles_posting">
	<h3>Check out the latest news from around the forum!</h3>
	<p>
	    There is currently no news.
	</p>

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
